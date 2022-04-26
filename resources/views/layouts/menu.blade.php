<li class="nav-item">

</li>


<li class="nav-item">
    <a href="{{ route('classes.index') }}"
       class="nav-link {{ Request::is('classes*') ? 'active' : '' }}">
        <p>Classes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classrooms.index') }}"
       class="nav-link {{ Request::is('classrooms*') ? 'active' : '' }}">
        <p>Classrooms</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('batches.index') }}"
       class="nav-link {{ Request::is('batches*') ? 'active' : '' }}">
        <p>Batches</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('levels.index') }}"
       class="nav-link {{ Request::is('levels*') ? 'active' : '' }}">
        <p>Levels</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('shifts.index') }}"
       class="nav-link {{ Request::is('shifts*') ? 'active' : '' }}">
        <p>Shifts</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('courses.index') }}"
       class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
        <p>Courses</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('facultys.index') }}"
       class="nav-link {{ Request::is('facultys*') ? 'active' : '' }}">
        <p>Facultys</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('times.index') }}"
       class="nav-link {{ Request::is('times*') ? 'active' : '' }}">
        <p>Times</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('attedances.index') }}"
       class="nav-link {{ Request::is('attedances*') ? 'active' : '' }}">
        <p>Attedances</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('academics.index') }}"
       class="nav-link {{ Request::is('academics*') ? 'active' : '' }}">
        <p>Academics</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('days.index') }}"
       class="nav-link {{ Request::is('days*') ? 'active' : '' }}">
        <p>Days</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classAssignings.index') }}"
       class="nav-link {{ Request::is('classAssignings*') ? 'active' : '' }}">
        <p>Class Assignings</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('classSchedullings.index') }}"
       class="nav-link {{ Request::is('classSchedullings*') ? 'active' : '' }}">
        <p>Class Schedullings</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('transactions.index') }}"
       class="nav-link {{ Request::is('transactions*') ? 'active' : '' }}">
        <p>Transactions</p>
    </a>
</li>


