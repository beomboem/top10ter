@extends('layouts.master')

@section('content')
<div class="row">
    {{-- upload section --}}
    <div class="col-sm-12">
        <a href="{{ url('admin/polling/create') }}" type="button" class="btn btn-success pull-right btn-sm"><i class="fa fa-upload"></i> <span>Add New Polling</span></a>
    </div>
    {{-- end upload section --}}
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Polling List
            </header>

            {{--Polling--}}
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <table id="datatable" class="table table-bordered table-striped">
                            <col width="40%"></col>
                            <col width="20%"></col>
                            <col width="20%"></col>
                            <col width="40%"></col>
                            <thead>
                                <td>Question</td>
                                <td>Status</td>
                                <td>Submitted By</td>
                                <td>Action</td>
                            </thead>
                             
                            @foreach($pollings as $polling)
                            <tr>
                                <td> {{ $polling->question }} </td>
                                <td> @if(isset($polling->status)) {{ title_case($polling->status)}} @endif </td>
                                <td> @if(isset($polling->submitted_by)) {{ App\User::find($polling->submitted_by)->name}} @endif </td>
                                <td>
                                    @if($polling->status == 'submitted')
                                        <a href="{{ action('Admin\PollingController@approve',$polling->id) }}">
                                            <button class="btn btn-xs btn-info" style="width:70px">
                                                Approve
                                            </button><br><br>
                                        </a>
                                        <a href="{{ action('Admin\PollingController@reject',$polling->id) }}">
                                            <button class="btn btn-xs btn-danger" style="width:70px">
                                                Reject
                                            </button><br><br>
                                        </a>
                                    @endif
                                    <button class="btn btn-xs" specification="button" onclick="showModalDetail({{$polling->id}})">
                                        <span class="fa fa-eye"></span>
                                    </button>
                                    <a href="{{ action('Admin\PollingController@edit',$polling->id) }}">
                                        <button class="btn btn-xs" specification="button">
                                            <span class="fa fa-edit"></span>
                                        </button>
                                    </a>
                                    <button class="btn btn-xs" specification="button" onclick="showModalDelete({{$polling->id}})">
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
@include('polling.modal-polling-detail')
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
        $('#modalDeleteForm').attr('action', '{{url("/admin/polling")}}/'+id);
    }
    function showModalDetail(polling_id) {
        var modal = $('#modalShowPolling');
        console.log(polling_id);
        $.ajax({
            url: "{{action('Admin\PollingController@data')}}",
            type: 'get',
            data: {id:polling_id},
            dataType:'json',
            success:function(data){
                modal.find('#question').text(data.question);
                modal.find('#option1').text(data.option1.answer+" ("+data.option1.count+" vote)");
                modal.find('#option2').text(data.option2.answer+" ("+data.option2.count+" vote)");
                modal.find('#option3').text(data.option3.answer+" ("+data.option3.count+" vote)");
                modal.modal('show');
            },
            error:function(){
                alert('error');
            }
        });
    }
</script>

@endsection