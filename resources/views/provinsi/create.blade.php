@extends('master')

@section('content')
    <div class="container mt-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add Data Provinsi
        </button>
        <table class="table table-bordered table-hover">
            <thead>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Provinsi</th>
                <th>Active</th>
                <th>Action</th>
            </thead>
            <tbody>
                {{--  @if ($data->count() == 0)
                <tr>
                    <td colspan="5">No products to display.</td>
                </tr>
                @endif
    
                @foreach ($data as $datas)
                <tr>
                    <td>{{ $datas->city }}</td>
                </tr>
                @endforeach  --}}
            </tbody>
        </table>
    </div>
    @include('provinsi.modal.add')
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $(document).on('click', '#save', function(stay){
                $.ajax({
                    type: 'POST',
                    url: "{{ url('provinsi') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        kode: jQuery('#name').val(),
                        nama_provinsi: jQuery('#name').val()
                    },
                    success: function (data) {
                    alert();
                    },
                });
            });
        });
    </script>
@endsection