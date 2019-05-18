# SIMPONI

Sistem Informasi Cara Tanam Hidroponik

# Dokumentasi

## Input File

#### Method POST
```
Input::post('username') // isset($_POST['username']) ? $_POST['username'] : null
```

#### Method GET
```
Input::get('username') // isset($_GET['username']) ? $_GET['username'] : null
```

#### Method FILES
```
/*
	example: 
	upload file = Image1.png
*/
$file = Input::file('foto');
$file->getName(); // Image1
$file->getExtension(); // png
$file->upload('path/to/upload')
```

To change name file
```
$file = Input::file('foto');
$file->upload('path/to/upload', $new_name)
```