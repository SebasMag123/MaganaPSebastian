# *Modelo de caja*

## Definicion

El modelo de caja es la forma en la cual se representan todos los elementos HTML en una pagina. Cada elemento genera una caja, el comportamiento de la caja depende de su clasificacion: si es de **linea** o **bloque**.

Todas las cajas pueden utilizar las siguientes propiedades: 

- Width
- Height
- Padding
- Border 
- Background

En la imagen se puede apreciar como se comporta cada una de las propiedades

![Propiedades](https://www.laurachuburu.com.ar/img/tutoriales/css/modelo-de-caja.png)

## Jerarquia

El orden en el que el usuario visualiza las partes que componen la caja es el siguiente:

1- **Contenido (content):** se trata del contenido HTML del elemento


2- **Relleno (padding):** espacio libre opcional existente entre el contenido y el borde


3- **Borde (border):** linea que encierra completamente el contenido y su relleno


4- **Imagen de fondo (background image):** imagen que se muestra por detras del contenido y el espacio de relleno


5- **Color de fondo (background color):** color que se muestra por detras del contenido y el espacio de relleno

6- **Margen (margin):** separacion opcional existente entre la caja y el resto de cajas adyacentes

![Jerarquia](https://uniwebsidad.com/static/libros/imagenes/css/f0403.gif)

## Medidas flexibles

Existen propiedades que definen el valor máximo o mínimo, éstas permiten mayor flexibilidad y se usan especialmente en los sitios responsive:

**Max-width:** ancho máximo. El elemento no puede ser más ancho que el valor especificado pero sí puede achicarse.

**Min-width:** ancho mínimo.  El elemento no puede ser más angosto que el valor especificado pero sí puede agrandarse.

**Max-height:** alto máximo. El elemento no puede ser más alto que el valor especificado pero sí puede achicarse.

**Min-height:** alto mínimo. El elemento no puede ser más bajo que el valor especificado pero sí puede agrandarse.