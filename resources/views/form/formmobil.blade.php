@extends("layout.layout")
@section("content")
        <!--#content-->
        <div class="content" >
            <div class="animated fadeIn">

                    
                        <div  class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>FORM MOBIL</strong></div>
                            <div class="card-body card-block">
                                <form action="/input" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group" ><label  class=" form-control-label">Nama Mobil</label><input type="text" name="nama_mobil"  placeholder="Masukan nama mobil" class="form-control">                                
                                    <div class="form-group"><label  class=" form-control-label">Merek</label> 
                                        <div class="col-12 col-md-9">
                                            <select name="merek" class="form-control">
                                                <option disabled selected>Select</option>
                                                <option >Suzuki</option>
                                                <option >Honda</option>
                                                <option >Daihatsu</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="form-group"><label  class=" form-control-label"> Kategori</label>
                                        <div class="col-12 col-md-9">
                                            <select name="kategori" class="form-control">
                                                <option disabled selected>Select</option>
                                                <option >MVP</option>
                                                <option >Sport</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="row form-group">
                                    <div class="col-8">
                                        <div class="form-group"><label class=" form-control-label">Harga</label><input type="text" name="harga" placeholder="Ex Rp.8.000.000" class="form-control"></div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group"><label class=" form-control-label">Tahun</label><input type="text" name="tahun" placeholder="Ex 2019" class="form-control"></div>
                                    </div>
                                </div>
                                <button style="float: right; height: 80px; width:100px;" type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                </form>
                        </div>
                    </div>
    


        </div><!-- .animated -->
    </div>
    <!-- /#content -->
@endsection
 