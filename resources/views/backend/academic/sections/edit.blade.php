<div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="{{route('admin.sections.update',[$item->id])}}" method="POST" id="ajax_form">
              @csrf
              @method('PATCH')
              <div class="row">
                  <div class="col-md-12 mb-2">
                      <div class="form-group">
                          <strong >Section Name</strong>
                          <input type="text" value="{{$item->name}}" class="form-control" name="name" placeholder="Enter Section name...">
                      </div>
                  </div>
              </div>
              <input type="submit" value="Update" class="btn btn-success">
              <hr>
          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>