  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Brands</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="storeBrand()">

          <div class="modal-body">
            <div class="mb-3">
              <label for="">Brand Name</label>
              <input type="text" wire:model.defer="nama" class="form-control">
              @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
              <label for="">Brand Slug</label>
              <input type="text" wire:model.defer="slug" class="form-control">
              @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="mb-3">
              <label for="">Status</label><br>
              <input type="checkbox" wire:model.defer="status"> Checked = Hidden, Un-Checked = Visible
              @error('status') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

          </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>