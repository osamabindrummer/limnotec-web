# Changelog

## 2026-02-06

### Cambios
- Sincronizada la rama `main` local con `origin/main` mediante `fetch` + `pull --rebase`.
- Integrada en `v5/index.html` una banda continua de clientes antes de la sección `👥 Equipo`, con texto introductorio "Han confiado en nosotros:".
- Dejada una sola variante visual (equivalente a la opción 3), con desplazamiento continuo y sin espacios muertos.
- Ajustado el diseño para que la banda sea transparente (sin fondo de contenedor), manteniendo clientes en cajas con borde `#3D8A9C` y texto blanco.
- Corregida ortografía en nombres de clientes: "Eléctrica", "Hidroeléctrica" y "Morandé".
- Reemplazadas líneas horizontales `<hr />` por separaciones verticales discretas.
- Actualizada nota final en contacto para incluir "permisos necesarios".

### Cómo verificar
1. Abrir `v5/index.html` y ubicar la banda antes de `👥 Equipo`.
2. Confirmar que la frase "Han confiado en nosotros:" es negra y que la banda no tiene fondo de contenedor.
3. Verificar desplazamiento continuo y ciclo sin cortes al volver a `AGEA`.
4. Confirmar que no hay líneas horizontales visibles en esas transiciones de sección.
5. Revisar la nota final de contacto con el texto actualizado sobre "permisos necesarios".

## 2026-01-29

### Cambios
- Actualizado `index.html` raíz con enlaces a `v1`–`v4`, descripciones y tamaños en MB.
- Eliminados archivos huérfanos en `v3/resources` que no estaban referenciados localmente.
- Actualizado `README.MD` con descripción del proyecto y detalle de versiones.
- Agregado `.gitignore` para archivos de macOS.
- Eliminados `copy_web.md` y archivos `.DS_Store` del repositorio.

### Notas
- En `v3/index.html` los íconos/favicons siguen apuntando a URLs absolutas; por eso se eliminaron los recursos locales equivalentes.

### Cómo verificar
1. Abrir `index.html` y comprobar que los enlaces a `v1/index.html`, `v2/index.html`, `v3/index.html`, `v4/index.html` funcionen.
2. Revisar `README.MD` para confirmar la descripción de versiones.
3. Confirmar que `v3/resources` ya no contiene los assets eliminados y que el sitio sigue cargando.

## 2026-01-28

### Cambios
- Agregado `README.MD` con diagnóstico técnico de `lt-v1` y `lt-v2`.
- Agregado `changelog.md` para registrar cambios futuros.
- Agregado PRD en `docs/prd-landing-limnotec-v3.md` con requisitos para la nueva landing.
- Agregado `docs/tareas.md` con tareas detalladas derivadas del PRD.
- Creada la base del proyecto Astro en `lt-v3` (configuración, layout y página inicial).
- Rediseñada la landing con enfoque premium inspirado en referencias (hero cinematográfico, tipografía editorial, grids amplios).
- Ajustados estilos globales y componentes (servicios, experiencia, navegación y contacto).
- Integrado video hero en `lt-v3/public/media/rock.mp4`.
- Reemplazado formulario por CTA `mailto` y botón de copiar correo en contacto.
- Renombrada la carpeta de trabajo a `lt-v3` y actualizadas referencias en documentación.
- Actualizado `docs/tareas.md` con el avance real y nuevo bloque de refinamiento.

### Notas
- Se optó por contacto vía `mailto` para mantener la landing simple y estática.

### Cómo verificar
1. Revisar `lt-v3/src/pages/index.astro` y `lt-v3/public/styles/global.css`.
2. Verificar que `lt-v3/public/media/rock.mp4` exista.
3. Probar que el botón "Escríbenos" abre el cliente de correo y que "Email en portapapeles" copia el correo.
4. Abrir `docs/tareas.md` y confirmar el avance.
