<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
    </style>
<div class="content-body">
    <div class="container-fluid">
        <div class="card">
            @foreach ($modal as $item)
                <div class="row">
                    <div class="row">
                        <div class="col-xl-11">
                            <div class="img_cont gambar">
                                <img src="https://i.postimg.cc/MpM0gDDQ/Logo-kal.png"
                                    style="max-width: 200px; height: auto; margin-left:5%;"
                                    class="rounded-circle user_img" alt="Logo Kalopsia" style="width: 50%;">
                                <span class="online_icon"></span>
                            </div>
                            <div class="modal-body">
                                @foreach ($kalo as $itemkalo)
                                <h6 class="text-muted">Slip gaji</h6>
                                <h6 class="text-muted">Periode : {{ \Carbon\Carbon::createFromFormat('Y-m-d', $itemkalo->periode_dimulai)->format('d M Y') }}</h6>
                                @endforeach
                                @foreach ($sia as $psia)
                                <h6 class="text-muted">Nama : {{$psia->name}}</h6>
                                @endforeach
                                <hr>                 
                                <div class="row">
                                </div>
                                <table id="customers">
                                    <tr>
                                      <th>Komponen Pendapatan</th>
                                      <th>Jumlah</th>
                                    </tr>
                                    <tr>
                                      <td>Gaji Pokok</td>
                                      <td>Rp.
                                        {{ number_format($item->basic_salary, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Uang Lembur </td>
                                        <td>Rp.
                                            {{ number_format($item->lateness, 0, ',', '.') }}
                                      </tr>
                                      <tr>
                                        <td>Tunjangan Pulsa </td>
                                        <td>Rp.
                                            {{ number_format($item->credit_allowance, 0, ',', '.') }}
                                      </tr>
                                      <tr>
                                        <td>Tunjangan Lainnya </td>
                                        <td>Rp.250.000</td>
                                      </tr>
                                      <tr>
                                        <td>Total Pendapata</td>
                                        <td>Rp.{{ number_format($item->total, 0, ',', '.') }}
                                      </tr>
                                      <p></p>
                                      <tr>
                                        <th>Komponen Potongan</th>
                                        <th>Jumlah</th>
                                      </tr>
                                      <tr>
                                        <td>Koperasi</td>
                                        <td>Rp.
                                            {{ number_format($item->cooperative, 0, ',', '.') }}</td>
                                      </tr>
                                      <tr>
                                          <td>Potongan Lainnya</td>
                                          <td>Rp.
                                            {{ number_format($item->salary_cut, 0, ',', '.') }}
                                      </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </body>
    </html>