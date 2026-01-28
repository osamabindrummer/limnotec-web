# LimnoTec Web – Diagnóstico y estado actual

## Resumen ejecutivo
- Las versiones previas (`lt-v1`, `lt-v2`) se mantienen intactas como referencia.
- El contacto se resolvió con **mailto** para mantener la landing estática y simple.

## Stack actual
- **Astro** (sitio estático) en `lt-v3`
- HTML/CSS/JS generado por Astro
- Assets locales (video hero y recursos reutilizados)

## Estructura clave
- `lt-v1/`: versión antigua (RapidWeaver)
- `lt-v2/`: versión reciente (RapidWeaver)
- `lt-v3/`: nueva landing premium en Astro
- `docs/prd-landing-limnotec-v3.md`: PRD
- `docs/tareas.md`: tareas detalladas

## Cómo ejecutar la landing (lt-v3)
Prechecks:
- Node.js instalado.

Comandos:
1. `cd /Users/dsj-imac/Developer/limnotec-web/lt-v3`
2. `npm install`
3. `npm run dev`

Abrir la URL indicada por Astro (normalmente `http://localhost:4321`).

## Notas
- `npm audit` reporta vulnerabilidades del servidor de desarrollo de Astro; se decidió postergar la actualización hasta después de cerrar el diseño.
