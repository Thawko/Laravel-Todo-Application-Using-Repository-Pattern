<div class="add-items d-flex justify-content-center">
    <form action="{{ route('todo_store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col-auto">
                <input type="text" class="form-control" id="title" name="title" placeholder="Todo Name">
            </div>
            <div class="col-auto">
                <button type="submit" class="add btn btn-primary font-weight-bold">
                    <i class="fa fa-plus"></i> Add
                </button>
            </div>
        </div>
    </form>
</div>
