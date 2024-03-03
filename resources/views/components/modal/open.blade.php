@props(['className' => 'open-modal', 'size' => 'modal-md'])
<div class="modal modal-blur fade {{ $className }}" style="display: none" aria-hidden="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered {{ $size }}" role="document">
        <div class="modal-content open-modal-content">
            <div class="modal-body text-center py-5">
                <div class="spinner-border text-secondary my-5" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</div>
