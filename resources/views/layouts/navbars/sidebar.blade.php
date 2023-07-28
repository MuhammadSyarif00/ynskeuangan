<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('YNS') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard')  @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'profile') class="active " @endif>
                <a href="{{ route('profile.edit')  }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('User Profile') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'item') class="active " @endif>
                <a href="{{ route('item.index') }}">
                    <i class="tim-icons icon-notes"></i>
                    <p>{{ __('Item') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'keuangan') class="active " @endif>
                <a href="{{ route('keuangan.index') }}">
                    <i class="tim-icons icon-money-coins"></i>
                    <p>{{ __('Pencatatan') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'laporan') class="active " @endif>
                <a href="{{ route('laporan.index') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Laporan') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
