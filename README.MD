<img src="./v5/assets/media/stacks-image-9f5470e-1200x404.png" alt="Texto alternativo" style="width: 50%;">

# Página web de LimnoTec

https://www.limnotec.cl

## Enlaces públicos a las versiones
- [Versión 1](https://osamabindrummer.github.io/limnotec-web/v1/index.html) (10 MB) - Rapidweaver hasta 2025
- [Versión 2](https://osamabindrummer.github.io/limnotec-web/v2/index.html) (37 MB) - V1 pero con tema Aspen de Rapidweaver
- [Versión 3](https://osamabindrummer.github.io/limnotec-web/v3/index.html) (10 MB) - Aspen de Rapidweaver pero nuevo copy
- [Versión 4](https://osamabindrummer.github.io/limnotec-web/v4/index.html) (1 MB) - Jugando con Codex desde cero (test)
- **[Versión 5](https://osamabindrummer.github.io/limnotec-web/v5/index.html) (3 MB) - Definitiva: Codex + nuevo copy**

## Resumen del proyecto
Este repositorio es una compilación de versiones alternativas de la página web de LimnoTec, mantenidas en carpetas independientes para comparación y referencia.

## Versiones
- **v1 (RapidWeaver, 10 MB):** web actual creada en 2020, mantenida intacta. Incluye formulario de contacto en PHP que no renderiza sin un servicio externo de procesamiento (funcionalidad adicional de RapidWeaver).
- **v2 (RapidWeaver, Aspen, 37 MB):** mismo contenido de la v1 (textos e imágenes) migrado a la plantilla Aspen. También incluye formulario de contacto en PHP con el mismo requerimiento de servicio externo.
- **v3 (RapidWeaver, Aspen, 10 MB):** versión moderna, breve y de una sola página con scroll. Diseño inspirado en Aspen y textos completamente nuevos.
- **v4 (IA, 1 MB):** versión creada con inteligencia artificial (Codex), usando el copy de la v3 con un diseño completamente distinto.
- **v5 (HTML/CSS, 12 MB):** alternativa idéntica a la v3 pero sin RapidWeaver, manteniendo la estructura en HTML/CSS directo.

## Estructura de carpetas
- `v1/`: versión 1 (RapidWeaver)
- `v2/`: versión 2 (RapidWeaver Aspen)
- `v3/`: versión 3 (RapidWeaver Aspen, landing moderna y breve)
- `v4/`: versión 4 (diseño IA con copy de v3)
- `v5/`: versión 5 (HTML/CSS directo, equivalente a v3)



## Mini-manual (deploy FTP/FTPS con `duck`)

1. Ir a tu proyecto
```bash
cd /Users/dsj-imac/Developer/limnotec-web
```

3. Subir el contenido de `v5` a `public_html`
```bash
duck --upload "ftps://limnote1@ftp.limnotec.cl/public_html/" /Users/dsj-imac/Developer/limnotec-web/v5/*
```
Si pregunta por certificado inválido: `y` (siempre que sea `ftp.limnotec.cl`). Si pide contraseña, ingrésala.

4. Verificar que quedó publicado en la raíz correcta
```bash
duck --list "ftps://limnote1@ftp.limnotec.cl/public_html/"
```
Debes ver `index.html` y `assets/` (no carpeta `v5`).

5. Verificar sitio online
- Abre [https://www.limnotec.cl](https://www.limnotec.cl)
- Haz recarga forzada: `Cmd + Shift + R`

**Errores típicos a recordar**
- No pongas `*` entre comillas:
  - Incorrecto: `".../v5/*"`
  - Correcto: `... /v5/*`
- Usa `ftps://` (no `ftp://`) para evitar advertencias/inseguridad.
- Ruta destino correcta: `/public_html/`

