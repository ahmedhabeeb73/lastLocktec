


<div class="modal  fade" id="a-{{$action->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$action->title}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {!! $action->tecnische!!}
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('actions.Close')}}</button>
          <a target="_blank" href="https://www.locktec.com/kontakt/" class="btn btn-outline-danger"
          >{{__('actions.Contact_us')}}</a
        >

        </div>
      </div>
    </div>
  </div>
</div>

