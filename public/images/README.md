# Guía de Imágenes para el Sitio Web

## Estructura de Carpetas

```
public/images/
├── carousel/           # Imágenes del carrusel principal
│   ├── slide1.jpg     # Generación de facturas
│   ├── slide2.jpg     # Cumplimiento normativo
│   ├── slide3.jpg     # Reportes y estadísticas
│   ├── slide4.jpg     # Firma electrónica
│   └── slide5.jpg     # Gestión de clientes
├── logos/             # Logos de la empresa
│   └── logo.png       # Logo principal (opcional)
└── dashboard-preview.png  # Preview del dashboard (Hero section)
```

## Especificaciones de Imágenes

### Imágenes del Carrusel
- **Ubicación**: `public/images/carousel/`
- **Nombres**: `slide1.jpg`, `slide2.jpg`, `slide3.jpg`, `slide4.jpg`, `slide5.jpg`
- **Dimensiones recomendadas**: 1200x600 píxeles
- **Formato**: JPG o PNG
- **Peso máximo**: 500KB por imagen (para carga rápida)

**Contenido sugerido para cada slide:**
1. **slide1.jpg**: Captura de pantalla del módulo de creación de facturas
2. **slide2.jpg**: Vista del panel de cumplimiento normativo o DTE
3. **slide3.jpg**: Dashboard con reportes y gráficas
4. **slide4.jpg**: Interfaz de firma electrónica
5. **slide5.jpg**: Módulo de gestión de clientes/productos

### Imagen del Dashboard (Hero Section)
- **Ubicación**: `public/images/`
- **Nombre**: `dashboard-preview.png`
- **Dimensiones recomendadas**: 500x400 píxeles
- **Formato**: PNG (para mejor calidad con transparencias)
- **Peso máximo**: 300KB

### Logo (Opcional)
- **Ubicación**: `public/images/logos/`
- **Nombre**: `logo.png`
- **Dimensiones recomendadas**: 200x50 píxeles (o proporcional)
- **Formato**: PNG con fondo transparente
- **Peso máximo**: 100KB

## Cómo Agregar las Imágenes

1. **Navega a la carpeta public/images**:
   - Ruta completa: `C:\xampp\htdocs\tutorial laravel\sitio-facturacion\public\images\`

2. **Copia tus imágenes**:
   - Para el carrusel: coloca las imágenes en `public/images/carousel/`
   - Para el dashboard: coloca la imagen en `public/images/`

3. **Nombra correctamente las imágenes**:
   - El sistema busca archivos con nombres específicos (slide1.jpg, slide2.jpg, etc.)
   - Si usas PNG en lugar de JPG, actualiza las extensiones en el código

## Notas Importantes

- **Fallback automático**: Si una imagen no se encuentra, el sistema mostrará automáticamente un placeholder de ejemplo
- **Optimización**: Comprime tus imágenes antes de subirlas para mejor rendimiento
- **Formato**: Usa JPG para fotografías y PNG para gráficos o imágenes con texto
- **Responsive**: Las imágenes se adaptan automáticamente a diferentes tamaños de pantalla

## Herramientas Recomendadas para Optimizar Imágenes

- **TinyPNG** (https://tinypng.com/) - Compresión de PNG/JPG
- **Squoosh** (https://squoosh.app/) - Editor online de imágenes
- **GIMP** - Software gratuito para edición de imágenes

## Ejemplo de Uso en el Código

```php
<!-- Imagen del carrusel -->
<img src="{{ asset('images/carousel/slide1.jpg') }}" alt="Descripción">

<!-- Imagen del dashboard -->
<img src="{{ asset('images/dashboard-preview.png') }}" alt="Dashboard">

<!-- Logo -->
<img src="{{ asset('images/logos/logo.png') }}" alt="Logo">
```

## ¿Qué hacer si no tienes las imágenes todavía?

No te preocupes, el sitio funcionará correctamente mostrando imágenes placeholder (de ejemplo) hasta que agregues tus propias capturas de pantalla. Puedes:

1. Hacer capturas de pantalla de tu sistema actual
2. Usar herramientas como Figma o Canva para crear mockups
3. Mantener los placeholders temporalmente hasta tener el sistema desarrollado
