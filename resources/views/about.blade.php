<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<body>
   @foreach ($ortu as $data) <hr>
    Nama ibu  : {{$data->nama_ibu}}<br>
    Nama ayah : {{$data->nama_ayah}}<br>
    Umur ibu  : {{$data->umur_ibu}}<br>
    Umur ayah : {{$data->umur_ayah}}<br>
   @foreach ($data->anak as $key) <hr>
        <li>{{$key->nama}}</li></br>
      @endforeach  
  <br>
     @endforeach
</body>
</html>