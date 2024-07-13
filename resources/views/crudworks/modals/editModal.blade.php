@if(request()->routeIs('data.edit'))
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{route('crud.update', $item->id)}}" method="POST">
				@csrf
                @method('PUT')		
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" id="name" name="name" value="{{$item->Name }}" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" id="email" name="email" value=" {{$item->Email}}" required>
					</div> 
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" id="address" name="address" value="{{  $item->Address }}" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" name="phone" name="phone" value="{{$item->Phone }}" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
@endif
		