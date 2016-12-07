@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Message List
            </header>

            {{--Message--}}
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <table id="datatable" class="table table-bordered table-striped">
                            <col width="20%"></col>
                            <col width="20%"></col>
                            <col width="40%"></col>
                            <thead>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Content</td>
                                <td>Action</td>
                            </thead>
                             
                            @foreach($messages as $message)
                            <tr>
                                <td> {{ $message->name }} </td>
                                <td> {{ $message->email }} </td>
                                <td> {{ $message->content }} </td>
                                <td>
                                    <button class="btn btn-xs" specification="button" onclick="showModalDetail({{$message->id}})">
                                        <span class="fa fa-eye"></span>
                                    </button>
                                    <button class="btn btn-xs" specification="button" onclick="showModalDelete({{$message->id}})">
                                        <span class="fa fa-trash"></span>
                                    </button>
                                </td>

                            </tr>
                            @endforeach
                    </table>
                    </div>
                </div>
                
            </div>

        </section>
        
    </div>
</div>
@include('message.modal-message-detail')
@include('modal-delete')
@endsection

@section('custom-js')
<script language="JavaScript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>

<script type="text/javascript">

    $('#datatable').dataTable();
    
    $("[data-toggle=tooltip]").tooltip();

</script>
<script type="text/javascript">
    function showModalDelete(id){
        $('#modalDelete').modal('show');
        $('#modalDeleteForm').attr('action', '{{url("/admin/message")}}/'+id);
    }
    function showModalDetail(message_id) {
        var modal = $('#modalShowMessage');
        console.log(message_id);
        $.ajax({
            url: "{{action('Admin\MessageController@data')}}",
            type: 'get',
            data: {id:message_id},
            dataType:'json',
            success:function(data){
                modal.find('#name').text(data.name);
                modal.find('#email').text(data.email);
                modal.find("#message").html(data.content);
                modal.modal('show');
            },
            error:function(){
                alert('error');
            }
        });
    }
</script>

@endsection