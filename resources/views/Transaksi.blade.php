<x-layout>

    <div class="container-fluid">
        <div class="row d-flex">
          <!-- head -->
          <x-header>Transaksi</x-header>

          <!-- Invite Active -->
          <div class="col-12">
            <div class="invite-message">
              <x-card-header>Transaksi</x-card-header>
              <x-table></x-table>
              {{-- button next --}}
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                  <li class="page-item">
                    <a class="page-link">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
</x-layout>