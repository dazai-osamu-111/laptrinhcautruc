<nav class="navbar navbar-expand-sm bg-dark">
    <div class="container-fluid">
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <i class="fa-light fa-share-all"></i>
          <a
            class="nav-link {{ request()->is('/rate-comment{orderId}') ? 'active' : '' }}"
            href="/order">Back to Orders
          </a>
        </li>
        {{-- <li class="nav-item">
          <a
          class="nav-link {{ request()->is('/ratecomment/{orderId}') ? 'active' : '' }}"
            href="/ratecomment/{orderId}">
            Rate-Comment
          </a>
        </li> --}}
      </ul>
    </div>
  </nav>
