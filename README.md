# Laravel - Merge2pdf

![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white)
![Livewire](https://img.shields.io/badge/livewire-%234e56a6.svg?style=for-the-badge&logo=livewire&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white)

Ver [demo](https://tl-developer-site.infinityfreeapp.com/merge2pdf/public/?i=1)

## 💻 Tecnologías

- Laravel ([v11](https://laravel.com/docs/11.x))
- Livewire ([v3](https://livewire.laravel.com/docs/quickstart))
- Tailwind ([V3.4](https://tailwindcss.com/docs/installation))

## 🪮 Capturas de pantalla

<details>
<summary>📱 Móvil</summary>

| Sección | Captura |
| ------- | ------- |
| Inicio | <img src="https://github.com/user-attachments/assets/cbd061e2-0aff-4e88-9445-9111667994d9" alt="Home page - mobile" height="500" /> |
| Subiendo archivos | <img src="https://github.com/user-attachments/assets/1e6bae3d-5b29-4f04-ba71-4ddb4c0ae901" alt="Uploading files - mobile" height="500" /> |
| Agregando más archivos | <img src="https://github.com/user-attachments/assets/5c058c64-0ff0-4714-98b1-b86ca45bd4b0" alt="Adding files - mobile" height="500" /> |
| Listado de archivos | <img src="https://github.com/user-attachments/assets/b6e0f7a8-84f8-40d0-a66a-4ad9b661e063" alt="Files list - mobile" height="500" /> |
| Validación | <img src="https://github.com/user-attachments/assets/e2810a6f-1853-43a2-a1eb-dbfcd52fc31b" alt="Validations - mobile" height="500" /> |
| Descarga | <img src="https://github.com/user-attachments/assets/f781a38f-0bbe-4b83-98d7-0394c825b6f1" alt="Download - mobile" height="500" /> |

</details>

<details>
<summary>🖥️ Escritorio</summary>

| Sección | Captura |
| ------- | ------- |
| Inicio | <img src="https://github.com/user-attachments/assets/f32a16d4-472e-4dc4-8331-0620261cd557" alt="Home page - Desktop" height="300" /> |
| Subiendo archivos | <img src="https://github.com/user-attachments/assets/e3122370-ba5a-4ccf-b590-a44acb60c812" alt="Uploading files - Desktop" height="300" /> |
| Listado de archivos | <img src="https://github.com/user-attachments/assets/c245dd98-5ba2-4084-9422-6f626e9f72db" alt="Files list - Desktop" height="300" /> |
| Descarga | <img src="https://github.com/user-attachments/assets/b726efa9-2526-49ff-abd5-cdf578afb25a" alt="Download - Desktop" height="300" /> |
    
</details>


## 🚀 Para empezar

Sientete libre de modificar este proyecto a tu gusto, es un proyecto sencillo al cual se le pueden agregar nuevas funcionalidades tanto como sean necesarias.

<details>
<summary> 🗃️ Archivos subidos </summary>    
    
Para este proyecto, los archivos subidos se guardan en `storage/app/public/temp`
    
![Uploaded files dir](https://github.com/user-attachments/assets/3aceee77-b5f1-471c-a775-558fff47b83f)   

Livewire te permite cambiar la ubicación en donde se guardarán los archivos que suba el usuario, para ello es necesario modificar el archivo `livewire.php` ubicado en la carpeta `config`

![Config livewire.php](https://github.com/user-attachments/assets/483e7844-cbdb-4785-bbab-62fbd0f96a2e)

Dentro del archivo busca `temporary_file_upload`, el cual se ve de la siguiente manera:

![temporary_file_upload](https://github.com/user-attachments/assets/aab63b91-7de9-4106-ad8b-eca7bdab5259)

Como podras notar, para este proyecto esta configurado, pero en caso de que lo quiras cambiar, modifica `directory` por el nombre de la carpeta de tu elección:

```php
'directory' => 'ruta/a/tu/directorio'
```

Ten en cuenta que la unidad de almacenamiento esta seleccionada en `public` por lo que tu direcotrio debera de estar dentro de `storage/app/public`

En caso de no contar con el archivo `livewire.php` puedes generarlo con el siguiente comando:

```bash
> php artisan livewire:publish --config
```

</details>

<details>
<summary>📂 PDFs unidos </summary>

Los archivos PDF que se unen, se guardan en `storage/app/public/mergedpdfs`

![Merged pdfs](https://github.com/user-attachments/assets/776520df-d6e7-4cda-a4b0-b67ced50faa5)

También puedes cambiar la carpeta destino, creando la tuya, te recomiendo hacerlo dentro de `storage/app/public`. Posteriormente es necesario cambiar el archivo `UploadPDf.php` ubicado en `app/Livewire`

![upload pdf](https://github.com/user-attachments/assets/4b9af869-8f5f-4d8b-aca9-2693f73999ea)

Aquí deberás cambiar la varibale `$pdf_path` dentro del método `merge_pdfs()`
En nuestro proyecto está de la siguiente manera:
```php
$pdf_path = storage_path('app/public/mergedpdfs/');
```
Reemplaza el argumento que se le da a la función `storage_path` por la ruta a tu directorio:
```php
#Ejemplo
$pdf_path = storage_path('app/public/ruta/a/tu/carpeta/');
```

De igual manera dentro de este archivo, puedes cambiar el nombre del nuevo pdf creado, cambiando `$filename`:
En nuestro proyecto está de la siguiente manera:
```php
#Concatena 'PDF-Unido con la fecha que se obtiene en la ejecución 
$filename =  'PDF-Unido '.date('m-d-Y h-i-s a', time()).'.pdf';
```
Esta así para evitar conflictos con nombres repetidos y cause errores de descarga.
Puedes cambiar al nombre de tu preferencia, toma en cuenta lo anterior, para evitar conflictos
```php
#Ejemplo
$filename =  'Tu-propio-nombre.pdf';
```
</details>

<details>
<summary>⬇️ Descarga de PDF unido</summary>
    
En caso de que hayas cambiado la carpeta de destino donde se guardarán los pdf unidos, también es necesario cambiar la ruta de descarga, para ello deberás econtrar el archivo `Download.php` dentro de `app/Livewire`

![Download](https://github.com/user-attachments/assets/0e993637-751d-4983-ad5b-5f3a704e2ff6)
Aquí, modificarás el método `download()`
```php
public function download() {
    #Se hace uso de response()->download()
    #Recibe la ruta al archivo a descargar como argumento
    return response()->download(storage_path('app/public/mergedpdfs/') . $this->filename);
}
```
Agrega la ruta a tu directorio que cambiaste previamente en `UploadPdf.php`
```php
public function download() {
    #Ejemplo
    return response()->download(storage_path('app/public/ruta/a/tu/directorio/') . $this->filename);
}
```
Listo, ahora todo seguirá funcionando sin problemas.
</details>

## ✅ Por hacer

- Agregar: Arrastrar y soltar archivos.
