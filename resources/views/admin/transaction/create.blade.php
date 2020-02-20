@extends('template.app')

@section('title' , 'Create Transaction')
@section('pagetitle' , 'Create Transaction')

@push('csscustom')
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <style>
        .label-required{
            font-size: 14px;
            color: red;
        }
    </style>
@endpush

@section('content')
    
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="box box-success">
            <form action="" method="POST" class="form" enctype="multipart/form-data">
                <div class="box-body">

                    @csrf
                    {{-- @method('POST') --}}

                    {{-- <div class="form-group">
                        <label for="">Kode Transaksi</label>
                        <input type="text" name="product" class="form-control input-sm" placeholder="Kode Transaksi.."
                        required maxlength="60" value="{{ old('product') }}">
                    </div>

                    <div class="form-group">
                        <label for="">Harga <span class="label-required">*</span></label>
                        <input type="number" name="price" class="form-control input-sm" placeholder="Harga Produk.."
                        required min="0" max="999999999" value="{{ old('price') }}">
                    </div>

                    <div class="form-group">
                        <label for="">Stok <span class="label-required">*</span></label>
                        <input type="number" name="stock" class="form-control input-sm" placeholder="Stok Produk.."
                        required min="0" max="999999999" value="{{ old('stock') }}">
                    </div>

                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" id="image" multiple name="image[]" id="image" accept="image/*">
                        <p class="help-block">Only File Images (.jpg/.jpeg/.png)</p>
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea id="description" class="form-control" name="description">{{ old('description') }}
                        </textarea>
                    </div> --}}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kode Transaksi</label>
                                <input type="" name="transaction_code" readonly class="form-control input-sm" 
                            required maxlength="60" style="width:50%; background-color:rgb(200, 200, 200)" placeholder="{{ $transaction->transaction_code }}""
                            >
                            </div>

                            <div class="form-group">
                                <label for="">User</label>
                                <select name="id" class="form-control" style="width:50%;">
                                    @foreach ($user as $usr)
                                        <option 
                                        value="{{ $usr->id }}"> {{ $usr->name }}
                                        </option>
                                    @endforeach;
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <select name="id" class="form-control" style="width:70%;" id="product"> 
                                    @foreach ($products as $pro)
                                        <option data-price={{ $pro->price }} data-stock=" {{ $pro->stock }} "
                                        > {{ $pro->product }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Harga Product</label>
                
                                    <input type="text" readonly value="" class="form-control" style="width:50%;">
                            </div>

                            <div class="form-group">
                                <label for="">Quantity</label>
                
                                    <input type="text" readonly value="" class="form-control" style="width:50%;">
                            </div>

                            <div class="form-group">
                                <label for="">Total Harga</label>
                
                                    <input type="text" readonly value="" class="form-control" style="width:50%;">
                            </div>
                        </div>
                    </div>

                    <div class="table" id="table">
                        <table class="table table-striped table-hover table-responsive" id="table">
                             <thead>
                                 <tr>
                                     <th>Opsi</th>
                                     {{-- <th>Kode Transaksi</th> --}}
                                     {{-- <th>User</th> --}}
                                     <th>Product</th>
                                     <th>Harga</th>
                                     <th>Stock</th>
                                     <th>Total Harga</th>
                                 </tr>
                             </thead>
         
                             <tbody>
                                <tr>
                                    {{-- <td> {{ $transactions->product }} </td> --}}
                                </tr>
                             </tbody>
         
                             <tfoot>
                             </tfoot>
                         </table>

                </div> <!-- /.box-body -->

                <div class="box-footer">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-md btn-success">
                            <i class="fa fa-save mr-3"></i>  Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>  
    </div>
</div>

@endsection

@push('scriptcustom')
    {{-- <script src="{{URL::asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script> --}}

    <script>
       
        $(document).ready(function(){
            $("#product").change(function(){

                product = $(this).val();
                price = $(this).find(':selected').data("price");
                stock = $(this).find(':selected').data("stock");

                row = `
                    <tr>
                    <td><a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                    <td> ${product} </td>
                    <td> ${price} </td>
                    <td> ${stock} </td>

                </tr>`;

                $("table tbody").append(row);

            });
        });

    </script>
@endpush