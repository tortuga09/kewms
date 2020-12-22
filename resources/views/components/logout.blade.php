<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
aria-hidden="true" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabelLogout">Peringatan!</h5>
    </div>
    <div class="modal-body">
      <p>Anda pasti untuk log keluar?</p>
    </div>
    <div class="modal-footer">
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary btn-sm">Log Keluar</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
      <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Batal</button>
    </div>
  </div>
</div>
</div>
