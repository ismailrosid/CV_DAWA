 @extends('layouts.admin')
 @section('title', 'ADM - Dashboard')
 @section('content')
     <section class="content">
         <div class="container-fluid">
             <!-- Small boxes (Stat box) -->
             <div class="row">
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-primary">
                         <div class="inner">
                             <h3>150</h3>
                             <p>Produk</p>
                         </div>
                         <div class="icon">
                             <i class="fas fa-box"></i>
                         </div>
                         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-success">
                         <div class="inner">
                             <h3>53<sup style="font-size: 20px"></sup></h3>
                             <p>Tumbuhan</p>
                         </div>
                         <div class="icon">
                             <i class="fas fa-seedling"></i>
                         </div>
                         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
                 <div class="col-lg-3 col-6">
                     <!-- small box -->
                     <div class="small-box bg-info">
                         <div class="inner">
                             <h3>44</h3>
                             <p>Informasi</p>
                         </div>
                         <div class="icon">
                             <i class="fas fa-info-circle"></i>
                         </div>
                         <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                     </div>
                 </div>
                 <!-- ./col -->
             </div>

             <!-- /.row -->
     </section>
 @endsection
