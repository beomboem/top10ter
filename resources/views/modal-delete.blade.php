<div class="modal fade" id="modalDelete" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Delete Confirm</h4>
          </div>
          <div class="modal-body">
              <p>Are you sure want to delete this?</p>
          </div>
          <div class="modal-footer">
              {!! Form::open(array('method' => 'delete', 'id' => 'modalDeleteForm')) !!}
                {!! Form::submit('Yes', ['class' => 'btn btn-success']) !!}
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
              {!! Form::close() !!}
             
          </div>
      </div>
  </div>
</div>
</div>