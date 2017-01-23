@extends('layouts.master')

@section('content')
<div class="row">
    {{-- upload section --}}
    <div class="col-sm-12">
        <a href="{{ url('admin/article/create') }}" type="button" class="btn btn-success pull-right btn-sm"><i class="fa fa-upload"></i> <span>Add New Article</span></a>
    </div>
    {{-- end upload section --}}
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Article List
            </header>

            {{--Service--}}
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <table id="datatable" class="table table-bordered table-striped">
                            <col width="20%"></col>
                            <col width="10%"></col>
                            <col width="40%"></col>
                            <col width="10%"></col>
                            <col width="10%"></col>
                            <col width="10%"></col>
                            <thead>
                                <td>Title</td>
                                <td>Author</td>
                                <td>Content</td>
                                <td>Status</td>
                                <td>Submitted By</td>
                                <td>Action</td>
                            </thead>
                             
                            @foreach($articles as $article)
                            <tr>
                                <td> {{ $article->title }} </td>
                                <td> {{ $article->author }} </td>
                                <td> {!! nl2br($article->content) !!} </td>
                                <td> @if(isset($article->status)) {{ title_case($article->status)}} @endif</td>
                                <td> @if(isset($article->submitted_by)) {{ App\User::find($article->submitted_by)->name}} @endif</td>
                                <td>
                                    {{-- <button class="btn btn-xs" specification="button" onclick="showModalDetail({{$article->id}})">
                                        <span class="fa fa-eye"></span>
                                    </button> --}}
                                    @if($article->status == 'submitted')
                                    <a href="{{ action('Admin\ArticleController@approve',$article->id) }}">
                                        <button class="btn btn-xs btn-info" style="width:70px">
                                            Approve
                                        </button><br><br>
                                    </a>
                                    <a href="{{ action('Admin\ArticleController@reject',$article->id) }}">
                                        <button class="btn btn-xs btn-danger" style="width:70px">
                                            Reject
                                        </button><br><br>
                                    </a>

                                    @endif
                                    <a href="{{ action('Admin\ArticleController@edit',$article->id) }}">
                                        <button class="btn btn-xs" specification="button">
                                            <span class="fa fa-edit"></span>
                                        </button>
                                    </a>
                                    <button class="btn btn-xs" specification="button" onclick="showModalDelete({{$article->id}})">
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
{{-- @include('admin.service.modal-service-detail') --}}
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
        $('#modalDeleteForm').attr('action', '{{url("/admin/article")}}/'+id);
    }
    // function showModalDetail(article_id) {
    //     var modal = $('#modalShowService');
    //     console.log(article_id);
    //     $.ajax({
    //         url: "{{action('Admin\ArticleController@index')}}",
    //         type: 'get',
    //         data: {id:article_id},
    //         dataType:'json',
    //         success:function(data){
    //             modal.find('#title').text(data.title);
    //             modal.find('#description').html(data.content);
    //             modal.find('#image img').attr('src',data.cover);
    //             modal.modal('show');
    //         },
    //         error:function(){
    //             alert('error');
    //         }
    //     });
    // }
</script>

@endsection