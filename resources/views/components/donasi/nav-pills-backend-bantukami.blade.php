<ul class="nav nav-pills justify-content-center">
    <li class="nav-item">
        <a class="nav-link @if($active == 'Bantukami') active @endif" 
            aria-current="page" 
            href="{{ route('Bantukami.show', $id ) }}">
            Timeline
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Updateinfo') active @endif" 
            href="{{ route('Updateinfo.show', $id) }}">
            Update Info
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Timbantuan') active @endif" 
            href="{{ route('Timbantuan.show', $id) }}">
            Tim Bantuan
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Rekeningdonasi') active @endif" 
            href="{{ route('Rekeningdonasi.show', $id) }}">
            Rekening Donasi
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Donasi') active @endif" 
            href="{{ route('Donasi.show', $id) }}">
            Donasi
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Pembelanjaandana') active @endif" 
            href="{{ route('Pembelanjaandana.show', $id) }}">
            Pembelanjaan Dana
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Korbanbencana') active @endif" 
            href="{{ route('Korbanbencana.show', $id) }}">
            Korban Bencana
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Titikpengungsian') active @endif" 
            href="{{ route('Titikpengungsian.show', $id) }}">
            Titik Pengungsian
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link @if($active == 'Titikblokir') active @endif" 
        href="{{ route('Titikblokir.show', $id) }}">
            Titik Blokir
        </a>
    </li> 
</ul>