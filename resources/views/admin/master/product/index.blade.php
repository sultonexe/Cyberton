@extends('template.app')

@section('title' , 'Product')
@section('pagetitle','Master Product')

@section('content')
<!-- Default box -->
    <div class="box box-primary">
        <div class="box-body">

            <div>
                <a href="{{ route('product.create') }}" class="btn btn-sm btn-primary">
                    <i class="fa fa-plus"></i> Tambah Data
                </a>
            </div>

           <div class="table">
               <table class="table table-striped table-hover table-responsive" id="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Image</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $item)
                            <tr>
                                <td>{{ $index + $products->firstItem() }}</td>
                                <td>{{ ucfirst($item->product) }}</td>
                                <td>{{ "Rp. ".number_format($item->price,0,'.','.') }}</td>
                                <td>{{ $item->stock }}</td>     
                                <td>
                                    @if($item->latestImage()->first() == null)
                                    @else 
                                    <img src="{{ URL::asset('uploads/'.$item->latestImage()->first()->image ) }}" alt="gambar product" width="80px" height="80px">
                                    @endif
                                   
                                </td>
                                <td>
                                    <a href="{{ route('product.show', $item->id) }}" class="btn btn-sm btn-primary"><span class="fa fa-external-link"></span> Detail</a>
                                    <a href="{{ route('product.edit' , $item->id) }}" class="btn btn-sm btn-success"><span class="fa fa-edit"></span> Edit</a>
                                    <a href="javascript:void(0)" onclick="$(this).find('form').submit()" 
                                        class="btn btn-sm btn-danger">
                                        <span class="fa fa-trash"></span> 

                                        <form action="{{ route('product.destroy' , $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </a>
                                </td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>

                <div class="pull-right">
                    {!! $products->links() !!}
                </div>

           </div>
        </div>
        <!-- /.box-body -->
@endsection