// Variables globales
let table;

// Escapa HTML para prevenir ataques XSS
function escapeHTML(str) {
    if (!str) return '';
    return str.replace(/[&<>'"]/g, 
        tag => ({
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            "'": '&#39;',
            '"': '&quot;'
        }[tag] || tag)
    );
}

// Muestra notificaciones dinámicas en el banner
function showAlert(message, type = 'success') {
    const container = document.getElementById('alert-container');
    if (!container) return;
    
    const iconHtml = type === 'success' 
        ? '<svg viewBox="0 0 24 24" style="width:20px;height:20px;fill:currentColor;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>'
        : '<svg viewBox="0 0 24 24" style="width:20px;height:20px;fill:currentColor;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>';
    
    const alert = document.createElement('div');
    alert.className = `alert-banner alert-banner-${type}`;
    alert.innerHTML = `${iconHtml}<span>${escapeHTML(message)}</span>`;
    
    container.innerHTML = '';
    container.appendChild(alert);
    
    setTimeout(() => {
        alert.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        alert.style.opacity = '0';
        alert.style.transform = 'translateY(-10px)';
        setTimeout(() => alert.remove(), 500);
    }, 5000);
}

// Cambiar estado de la tarea (Completada/Pendiente)
function toggleTaskStatus(id) {
    fetch('index.php?api=1&action=toggle', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({ id })
    })
    .then(response => {
        if (!response.ok) {
            return response.json().then(err => { throw err; });
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            showAlert(data.message, 'success');
            if (table) table.setData();
        } else {
            showAlert(data.message || 'Error al actualizar estado.', 'danger');
        }
    })
    .catch(err => {
        console.error(err);
        showAlert(err.message || 'Error de red al cambiar estado.', 'danger');
    });
}

// Eliminar tarea de la base de datos
function deleteTask(id) {
    fetch('index.php?api=1&action=delete', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },
        body: JSON.stringify({ id })
    })
    .then(response => {
        if (!response.ok) {
            return response.json().then(err => { throw err; });
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            showAlert(data.message, 'success');
            if (table) table.setData();
        } else {
            showAlert(data.message || 'Error al eliminar tarea.', 'danger');
        }
    })
    .catch(err => {
        console.error(err);
        showAlert(err.message || 'Error de red al eliminar la tarea.', 'danger');
    });
}

// Inicialización de la aplicación al cargar DOM
document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Inicializar Tabulator
    const tableContainer = document.getElementById('tasks-table');
    if (tableContainer) {
        table = new Tabulator("#tasks-table", {
            ajaxURL: "index.php?api=1&action=list",
            layout: "fitColumns",
            responsiveLayout: "collapse",
            placeholder: `
                <div class="empty-state">
                    <svg viewBox="0 0 24 24">
                        <path d="M22 16V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2zm-11-4l2.03 2.71L16 11l4 5H8l3-4zM2 6v14c0 1.1.9 2 2 2h14v-2H4V6H2z"/>
                    </svg>
                    <p>No hay tareas registradas. ¡Comienza creando una nueva tarea!</p>
                </div>
            `,
            columns: [
                {
                    title: "Tarea",
                    field: "title",
                    minWidth: 200,
                    formatter: function(cell) {
                        const data = cell.getRow().getData();
                        const titleEscaped = escapeHTML(data.title);
                        const descEscaped = data.description ? escapeHTML(data.description) : "";
                        const descHtml = descEscaped ? `<p class="tabulator-task-desc">${descEscaped}</p>` : "";
                        const completedClass = data.status === 'completed' ? 'tabulator-task-completed' : '';
                        
                        return `<div class="${completedClass}">
                            <h3 class="tabulator-task-title">${titleEscaped}</h3>
                            ${descHtml}
                        </div>`;
                    }
                },
                {
                    title: "Creado el",
                    field: "created_at",
                    width: 160,
                    hozAlign: "center",
                    formatter: function(cell) {
                        const val = cell.getValue();
                        if (!val) return "";
                        const date = new Date(val.replace(/-/g, "/"));
                        const day = String(date.getDate()).padStart(2, '0');
                        const month = String(date.getMonth() + 1).padStart(2, '0');
                        const year = date.getFullYear();
                        const hours = String(date.getHours()).padStart(2, '0');
                        const minutes = String(date.getMinutes()).padStart(2, '0');
                        return `<span class="time-meta">${day}/${month}/${year} ${hours}:${minutes}</span>`;
                    }
                },
                {
                    title: "Estado",
                    field: "status",
                    width: 140,
                    hozAlign: "center",
                    headerSort: false,
                    formatter: function(cell) {
                        const val = cell.getValue();
                        if (val === 'completed') {
                            return `<span class="badge badge-success" style="cursor: pointer;">
                                <span style="width: 8px; height: 8px; background-color: var(--color-success); border-radius: 50%; display: inline-block; box-shadow: 0 0 6px var(--color-success);"></span>
                                Completada
                            </span>`;
                        } else {
                            return `<span class="badge badge-info" style="cursor: pointer; background-color: rgba(245, 158, 11, 0.15); color: var(--color-warning); border-color: rgba(245, 158, 11, 0.2);">
                                <span style="width: 8px; height: 8px; background-color: var(--color-warning); border-radius: 50%; display: inline-block; box-shadow: 0 0 6px var(--color-warning);"></span>
                                Pendiente
                            </span>`;
                        }
                    },
                    cellClick: function(e, cell) {
                        e.stopPropagation();
                        const id = cell.getRow().getData().id;
                        toggleTaskStatus(id);
                    }
                },
                {
                    title: "Acciones",
                    width: 100,
                    hozAlign: "center",
                    headerSort: false,
                    formatter: function() {
                        return `
                            <div class="tabulator-actions-cell">
                                <button class="action-btn-tabulator delete-btn" title="Eliminar Tarea">
                                    <svg viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg>
                                </button>
                            </div>
                        `;
                    },
                    cellClick: function(e, cell) {
                        const deleteBtn = e.target.closest('.delete-btn');
                        if (deleteBtn) {
                            e.stopPropagation();
                            const data = cell.getRow().getData();
                            if (confirm(`¿Seguro que deseas eliminar la tarea "${data.title}"?`)) {
                                deleteTask(data.id);
                            }
                        }
                    }
                }
            ]
        });
    }

    // 2. Interceptar Envío de Formulario
    const form = document.getElementById('task-form');
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const submitBtn = document.getElementById('submit-btn');
            const titleInput = document.getElementById('title');
            const descInput = document.getElementById('description');
            
            const title = titleInput.value.trim();
            const description = descInput.value.trim();
            
            if (!title) return;
            
            // Animación del botón submit
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.dataset.originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = `
                    <svg class="animate-spin" style="width:16px;height:16px;margin-right:8px;display:inline-block;vertical-align:middle;animation:spin 1s linear infinite;" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none" style="opacity:0.25;"></circle>
                        <path fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg> Guardando...`;
            }
            
            fetch('index.php?api=1&action=add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ title, description })
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(err => { throw err; });
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    showAlert(data.message, 'success');
                    form.reset();
                    if (table) table.setData();
                } else {
                    showAlert(data.message || 'Error al guardar la tarea.', 'danger');
                }
            })
            .catch(err => {
                console.error(err);
                showAlert(err.message || 'Ocurrió un error al procesar la solicitud.', 'danger');
            })
            .finally(() => {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = submitBtn.dataset.originalText || 'Guardar Tarea';
                }
            });
        });
    }

    // 3. Botón de Recargar Tabla Manualmente
    const refreshBtn = document.getElementById('refresh-table-btn');
    if (refreshBtn) {
        refreshBtn.addEventListener('click', () => {
            if (table) {
                table.setData()
                    .then(() => showAlert('Lista de tareas actualizada con éxito.', 'success'))
                    .catch(() => showAlert('Error al sincronizar las tareas.', 'danger'));
            }
        });
    }

    // Animación CSS spin
    const style = document.createElement('style');
    style.innerHTML = `@keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }`;
    document.head.appendChild(style);

    // Auto-dismiss de alertas cargadas inicialmente por PHP (si las hay)
    const alerts = document.querySelectorAll('.alert-banner');
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            alert.style.opacity = '0';
            alert.style.transform = 'translateY(-10px)';
            setTimeout(() => alert.remove(), 500);
        }, 5000);
    });
});
