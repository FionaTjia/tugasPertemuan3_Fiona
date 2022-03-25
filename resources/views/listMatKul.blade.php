<html>
    <head>
        <title>List Profil Mahasiswa</title>
        <style>
            table, td, th {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    
    <body>
        <table>
            <tr>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>

            @foreach ($matkul as $showMatkul)
            <tr> <td>{{ $showMatkul['kode'] }}</td> 
                <td>{{ $showMatkul['nama'] }}</td>
                <td>{{ $showMatkul['sks'] }}</td>
            </tr>
            @endforeach
        </table>
        
        
    </body>
</html>