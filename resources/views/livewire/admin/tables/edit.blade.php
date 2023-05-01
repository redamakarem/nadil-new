<div>
    <form wire:submit.prevent="submit">
        <div class="card-body">
            

            <div class="form-group">
                <label for="name">{{__('Table Name')}}</label>
                <input wire:model="diningTable.name"
                       type="text" class="form-control" id="name" placeholder="Enter table Name">
            </div>
            <div class="form-group">
                <label for="name">{{__('Capacity')}}</label>
                <input wire:model="diningTable.capacity"
                       type="number" class="form-control"  placeholder="Enter table capacity">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="accessible" wire:model="diningTable.name">
                <label class="form-check-label" for="accessible">{{ __('Active') }}</label>
            </div>
            
            
            


        </div>



        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
