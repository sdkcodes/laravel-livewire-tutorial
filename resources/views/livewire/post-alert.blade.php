<div>
    <h4>Seeing livewire action in action 😜</h4>
    <button class="btn btn-primary" wire:click="toggleLike()">
        Like
    </button>
    @if ($liked)
        <i class="fa fa-heart text-danger h4"></i>
    @else
        <i class="fa fa-heart text-secondary h4"></i>
    @endif
</div>
