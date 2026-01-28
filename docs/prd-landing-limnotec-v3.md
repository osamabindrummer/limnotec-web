# PRD: Landing LimnoTec v3

## 1. Introducción / Resumen
Queremos construir una nueva landing page de una sola página para LimnoTec, reemplazando la estructura multi‑página actual. El objetivo es presentar toda la información de la empresa en una sola URL (p. ej., `limnotec.cl/index.html`), con un diseño **minimalista premium**, **moderno** y **responsive** (móvil/tablet/desktop). El contenido se tomará de las versiones existentes `lt-v1` y `lt-v2`, pero con **reescritura y edición** para mejorar claridad, síntesis y coherencia visual. La implementación será **estática**, con **Astro** como framework y con todos los archivos del proyecto ubicados en la carpeta `lt-v3`.

## 2. Objetivos
- Unificar toda la información en una **landing de una sola página** con navegación por secciones.
- Lograr una **percepción profesional, minimalista y premium**.
- Garantizar **alta calidad responsive** en móviles, tablets y desktop.
- Reutilizar el contenido existente, **reescrito** para ajustarse al nuevo diseño.
- Mantener un despliegue simple (sitio estático), con salida en `lt-v3`.

## 3. Historias de usuario
- Como **cliente potencial**, quiero entender rápidamente qué hace LimnoTec y por qué es confiable, para decidir si contactarlos.
- Como **cliente potencial**, quiero navegar en el teléfono sin fricción y leer el contenido con buena legibilidad.
- Como **dueño del sitio**, quiero poder actualizar textos/imagenes de forma simple sin romper el diseño.

## 4. Requisitos funcionales
1. La página debe ser **una sola URL** con secciones navegables por anclas.
2. Debe existir un **hero con video de fondo** y un **gradiente hacia oscuro** que lo integre con el contenido.
3. Debe incluir un **CTA claro** hacia contacto.
4. Debe tener secciones equivalentes a la propuesta moderna ya discutida: hero, quiénes somos, especialistas/enfoque, servicios o tipologías, metodología/enfoque científico, experiencia/galería, contacto, footer.
5. El contenido textual debe derivarse de `lt-v1` y `lt-v2`, pero **reescrito** para estilo minimalista premium.
6. El formulario de contacto debe **mantenerse en PHP**, usando el flujo actual (mailer existente).
7. La landing debe ser **100% responsive** (móvil, tablet, desktop) y optimizada para lectura en pantallas pequeñas.
8. Los assets (imágenes y videos) deben reutilizarse desde `lt-v1` y `lt-v2`, priorizando los de `lt-v2`.
9. El proyecto debe residir en la carpeta **`lt-v3`** con estructura clara y versionable.

## 5. No‑objetivos (Fuera de alcance)
- No se implementará un CMS ni panel de administración.
- No se integrarán analíticas avanzadas en esta primera versión.
- No se agregará lógica de backend adicional más allá del formulario PHP existente.
- No se traducirá a inglés en esta fase.

## 6. Consideraciones de diseño
- Estética **minimalista premium**: tipografía limpia, grilla respirada, uso de blanco/negro con acentos sobrios.
- Hero con **video + gradiente** (inspirado en `lt-v2`).
- Evitar “plantilla genérica”: identidad visual clara y coherente con LimnoTec.
- Navegación con **scroll suave** y anclas internas.
- Evitar bloques de texto largos sin respiro; preferir párrafos cortos y jerarquía clara.

## 7. Consideraciones técnicas
- Framework: **Astro** (build estático, salida final en HTML/CSS/JS).
- Todo el código fuente y output deben vivir bajo `lt-v3`.
- El formulario PHP debe integrarse sin romper la salida estática (posible subcarpeta `contacto/` o endpoint específico dentro de `lt-v3`).
- Priorizar rendimiento: video optimizado, imágenes comprimidas y uso de formatos modernos cuando sea posible.

## 8. Métricas de éxito
- Percepción de marca **más profesional y premium** (validación cualitativa con stakeholders).
- Tiempo de permanencia en página estable o mayor al actual (si luego se mide).

## 9. Preguntas abiertas
- ¿Cuál será la ubicación exacta del endpoint PHP dentro de `lt-v3`?
- ¿Se desea un logotipo alternativo (blanco/negro) para el hero con video?
- ¿Se definirá una paleta de colores institucional formal antes del diseño final?
