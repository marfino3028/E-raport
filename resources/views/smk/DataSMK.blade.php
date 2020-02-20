<html>
<head>
    <link rel="stylesheet" href="layouts/vendors/bootstrap/dist/css/bootstrap.min.css">
    <style>
        td,th {
            font-family: 'Times New Roman', Times, serif;
            font-size: 10px;
        }
        img{
        position: absolute;
        top: -20px;
        }
        p{
        font-family: Basic;
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        line-height: 140.62%;
        /* or 35px */
        text-align: center;
        color: #000000;
        }
    </style>
</head>
<body>
  <img src="main/img/ponpes2.png" width="13%" alt="">
  <p>DATA SISWA <br>
      SMK TAHFIDZ ENTREPRENEUR THURSINA YBM PLN <br>
      CIBEUREUM CISARUA BOGOR <br></p>
      <hr>
                <table border="1" cellspacing="0" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    @php
                        $ar_judul = ['No','NIS','Nama','Kelas','Kategori' ,'Tempat Lahir','Tanggal Lahir','Alamat'];
                        $no = 1;
                    @endphp
                    @foreach($ar_judul as $jdl)
                        <th class="text-center">{{ $jdl }}</th>
                    @endforeach
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($ar_smk as $smk)  
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ $smk->nis}}</td>
                        <td class="text-center">{{ $smk->nama}}</td>
                        <td class="text-center">{{ $smk->kelas}}</td>
                        <td class="text-center">{{ $smk->jenis}}</td>
                        <td class="text-center">{{ $smk->tempat_lahir}}</td>
                        <td class="text-center">{{ $smk->tanggal_lahir}}</td>
                        <td class="text-center">{{ $smk->alamat}}</td>
                    </tr>
                  @endforeach  
                </tbody>

                </table>
</html>