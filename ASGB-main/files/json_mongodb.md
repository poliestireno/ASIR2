## **JSON (JavaScript Object Notation)**

### **¿Qué es JSON?**

JSON es un formato de intercambio de datos ligero basado en texto, utilizado principalmente para transmitir datos entre un servidor y una aplicación web. Su simplicidad lo ha convertido en un estándar ampliamente adoptado.

### **Características de JSON**

1. **Formato basado en texto**: Fácil de leer y escribir tanto para humanos como para máquinas.  
2. **Ligero**: Consume menos ancho de banda al ser compacto.  
3. **Compatible con muchos lenguajes**: JSON es soportado nativamente o a través de bibliotecas en casi todos los lenguajes de programación.  
4. **Flexible**: Permite estructuras de datos complejas gracias al uso de objetos y arreglos.

### **Sintaxis JSON**

* **Objeto JSON**: Un conjunto de pares clave-valor encerrado en llaves `{}`.  
* **Array JSON**: Una lista ordenada de valores encerrada en corchetes `[]`.

#### **Ejemplo:**

json

`{`  
  `"name": "Alice",`  
  `"age": 30,`  
  `"email": "alice@example.com",`  
  `"skills": ["JavaScript", "Python", "SQL"],`  
  `"address": {`  
    `"street": "123 Main St",`  
    `"city": "Springfield",`  
    `"zip": "12345"`  
  `}`  
`}`

#### **Tipos de datos JSON:**

1. **String**: `"Hello, world!"`  
2. **Number**: `42`, `3.14`  
3. **Boolean**: `true`, `false`  
4. **Null**: `null`  
5. **Array**: `["item1", "item2"]`  
6. **Object**: `{ "key": "value" }`

## **1\. Crear una base de datos**

En la terminal de MongoDB:

`use arboles`

Esto seleccionará (o creará, si no existe) la base de datos llamada `arboles`.

---

## **2\. Insertar documentos básicos**

### **Insertar árboles con información general:**

`db.trees.insertMany([`

  `{`

    `name: "Roble",`

    `scientific_name: "Quercus robur",`

    `height: 35,`

    `age: 120,`

    `location: { country: "España", region: "Galicia" }`

  `},`

  `{`

    `name: "Pino",`

    `scientific_name: "Pinus sylvestris",`

    `height: 40,`

    `age: 80,`

    `location: { country: "España", region: "Cataluña" }`

  `},`

  `{`

    `name: "Abeto",`

    `scientific_name: "Abies alba",`

    `height: 50,`

    `age: 100,`

    `location: { country: "Francia", region: "Alpes" }`

  `}`

`])`

---

## **3\. Consultar documentos**

### **Buscar todos los árboles:**

`db.trees.find()`

### **Buscar árboles por altura mayor a 30 metros:**

`db.trees.find({ height: { $gt: 30 } })`

### **Buscar un árbol por su nombre científico:**

`db.trees.find({ scientific_name: "Pinus sylvestris" })`

---

## **4\. Relaciones entre documentos**

### **Relación 1:1: Un árbol y su clasificación ecológica**

Cada árbol tiene un único tipo de clasificación ecológica.

Inserta un documento en la colección `ecological_classifications`:  


`db.ecological_classifications.insertOne({`

  `_id: ObjectId("64891b2e5d2f4a38b89e0c1a"),`

  `type: "Deciduo",`

  `description: "Árboles que pierden sus hojas estacionalmente."`

`})`



Relaciona el árbol "Roble" con esta clasificación:  
javascript

`db.trees.updateOne(`

  `{ name: "Roble" },`

  `{ $set: { ecological_classification_id: ObjectId("64891b2e5d2f4a38b89e0c1a") } }`

`)`



Consulta la relación usando `lookup`:  
javascript

`db.trees.aggregate([`

  `{`

    `$lookup: {`

      `from: "ecological_classifications",`

      `localField: "ecological_classification_id",`

      `foreignField: "_id",`

      `as: "classification"`

    `}`

  `}`

`])`



---

### **Relación 1:N: Un árbol y sus avistamientos**

Un árbol puede ser avistado múltiples veces en diferentes ubicaciones.

Inserta avistamientos para el árbol "Pino":

`db.sightings.insertMany([`

  `{ tree_name: "Pino", location: "Pirineos", date: ISODate("2023-11-01T00:00:00Z") },`

  `{ tree_name: "Pino", location: "Montseny", date: ISODate("2023-12-01T00:00:00Z") }`

`])`



Consulta los avistamientos de "Pino":

`db.sightings.find({ tree_name: "Pino" })`



Usa `lookup` para mostrar los avistamientos relacionados:

`db.trees.aggregate([`

  `{`

    `$lookup: {`

      `from: "sightings",`

      `localField: "name",`

      `foreignField: "tree_name",`

      `as: "sightings"`

    `}`

  `}`

`])`



---

### **Relación N:M: Árboles y animales asociados**

Un árbol puede ser hogar de múltiples animales, y un animal puede habitar múltiples árboles.

Inserta animales en la colección `animals`:

`db.animals.insertMany([`

  `{ name: "Ardilla", species: "Sciurus vulgaris" },`

  `{ name: "Pájaro carpintero", species: "Picidae" }`

`])`



Inserta relaciones en una colección intermedia `tree_animal`:

`db.tree_animal.insertMany([`

  `{ tree_name: "Roble", animal_name: "Ardilla" },`

  `{ tree_name: "Roble", animal_name: "Pájaro carpintero" },`

  `{ tree_name: "Pino", animal_name: "Ardilla" }`

`])`



Consulta los animales asociados a cada árbol usando agregación:

`db.trees.aggregate([`

  `{`

    `$lookup: {`

      `from: "tree_animal",`

      `localField: "name",`

      `foreignField: "tree_name",`

      `as: "tree_animals"`

    `}`

  `},`

  `{`

    `$lookup: {`

      `from: "animals",`

      `localField: "tree_animals.animal_name",`

      `foreignField: "name",`

      `as: "animals"`

    `}`

  `}`

`])`
 

---
