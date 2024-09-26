@extends("layout.layout")
@section("content")

        <!--#Conten-->
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">HOME</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">No</th>
                                            <th>Nama Mobil</th>
                                            <th>Merek</th>
                                            <th>Kategori</th>
                                            <th>Harga</th>
                                            <th>Tahun</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mobil as $data)
                                            <tr>
                                                <td class="serial">{{$no++}}</td>
                                                <td class="name">{{ $data->nama_mobil}} </td>
                                                <td>  <span class="name">{{ $data->merek}}</span> </td>
                                                <td> <span class="product">{{ $data->kategori}}</span> </td>
                                                <td><span class="product">Rp.{{ $data->Harga}}</span></td>
                                                <td><span class="count">{{ $data->Tahun}}</span></td>
                                                <td>

                                                    <a href="/{{ $data->id_mobil }}/ubah"><button class="btn btn-primary">--EDIT--</button></a>
                                                    <form method="POST" action="/{{ $data->id_mobil }}/delete">
                                                        {{csrf_field()}}
                                                        <input  type="submit" name="delete" value="Delete" class="btn btn-warning"/>
                                                        <input type="hidden" name="_method" value="DELETE"/>
                                                    </form>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                             <!-- #Tombol Tambah Data -->
                                 <div class="card-body">
                                    <a href="{{url('input')}}"><button type="button" class="btn btn-primary">Tambah Data</button></a>
                                </div>
                             <!-- /#Tombol Tambah Data -->
                        </div>
                    </div>

                    


        <!--/#Conten-->
    @endsection
       

  