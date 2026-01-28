## Archivos relevantes

- `lt-v3/` - Carpeta principal del nuevo sitio Astro (código fuente y salida estática).
- `lt-v3/src/pages/index.astro` - Página única de la landing con secciones y anclas.
- `lt-v3/src/components/` - Componentes UI reutilizables (slider de servicios, marquee de experiencia).
- `lt-v3/public/styles/global.css` - Estilos globales y tokens de diseño.
- `lt-v3/public/` - Assets estáticos (videos, imágenes, íconos) copiados desde lt‑v2/lt‑v1.
- `lt-v3/public/media/rock.mp4` - Video principal del hero.
- `lt-v3/astro.config.mjs` - Configuración de Astro.

### Notas

- Las pruebas no son prioritarias en esta landing estática; si se agregan, deben quedar cerca del código que validen.
- Los assets deben optimizarse (peso y formato) para no afectar rendimiento.

## Tareas

- [x] 1.0 Definir estructura de secciones y contenido final de la landing
  - [x] 1.1 Inventariar textos de `lt-v1` y `lt-v2` y seleccionar qué se reutiliza.
  - [x] 1.2 Reescribir textos para estilo minimalista premium (titulares, párrafos, CTA).
  - [x] 1.3 Definir orden de secciones y navegación por anclas.
- [x] 2.0 Definir base visual (tipografía, paleta, espaciados, estilo premium)
  - [x] 2.1 Elegir tipografías (títulos vs cuerpo) y jerarquía.
  - [x] 2.2 Definir paleta de colores (fondo, texto, acento) y gradiente del hero.
  - [x] 2.3 Definir reglas de espaciado y tamaños responsive.
- [x] 3.0 Preparar proyecto Astro en `lt-v3` y estructura de rutas/anclas
  - [x] 3.1 Inicializar Astro con configuración mínima.
  - [x] 3.2 Definir estructura de carpetas (`src/pages`, `src/components`, `public/styles`).
  - [x] 3.3 Configurar estilos globales y tokens de diseño.
- [x] 4.0 Implementar layout y secciones responsive (mobile‑first)
  - [x] 4.1 Construir hero con video de fondo y overlay gradiente.
  - [x] 4.2 Implementar secciones: quiénes somos, especialistas, servicios, metodología, experiencia/galería, contacto.
  - [x] 4.3 Añadir navegación interna con scroll suave.
  - [x] 4.4 Ajustar comportamiento responsive (mobile/tablet/desktop).
- [x] 5.0 Integrar assets y contacto (mailto)
  - [x] 5.1 Copiar/optimizar videos e imágenes desde `lt-v2`/`lt-v1` hacia `lt-v3/public`.
  - [x] 5.2 Reemplazar formulario por CTA mailto con opción de copiar correo.
  - [x] 5.3 Validar enlaces y funcionamiento de contacto.
- [ ] 6.0 Refinar versión premium (ajustes finos y feedback)
  - [ ] 6.1 Ajustar hero según feedback (tipografía, contraste, overlays).
  - [ ] 6.2 Revisar servicios/carrusel (interacción y densidad de texto).
  - [ ] 6.3 Ajustar sección experiencia (logos reales, ritmo de movimiento).
  - [ ] 6.4 Revisión final de copy y micro‑detalles.
