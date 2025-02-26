        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="{{ route('dashboard') }}" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <span style="color: var(--bs-primary)">
                            <img src="{{ asset('assets/img/logo.png') }}" width="120"  alt="" >
                        </span>
                    </span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                        d="M8.47365 11.7183C8.11707 12.0749 8.11707 12.6531 8.47365 13.0097L12.071 16.607C12.4615 16.9975 12.4615 17.6305 12.071 18.021C11.6805 18.4115 11.0475 18.4115 10.657 18.021L5.83009 13.1941C5.37164 12.7356 5.37164 11.9924 5.83009 11.5339L10.657 6.707C11.0475 6.31653 11.6805 6.31653 12.071 6.707C12.4615 7.09747 12.4615 7.73053 12.071 8.121L8.47365 11.7183Z"
                        fill-opacity="0.9" />
                        <path
                        d="M14.3584 11.8336C14.0654 12.1266 14.0654 12.6014 14.3584 12.8944L18.071 16.607C18.4615 16.9975 18.4615 17.6305 18.071 18.021C17.6805 18.4115 17.0475 18.4115 16.657 18.021L11.6819 13.0459C11.3053 12.6693 11.3053 12.0587 11.6819 11.6821L16.657 6.707C17.0475 6.31653 17.6805 6.31653 18.071 6.707C18.4615 7.09747 18.4615 7.73053 18.071 8.121L14.3584 11.8336Z"
                        fill-opacity="0.4" />
                    </svg>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboards -->
                <li class="menu-item @if (Route::currentRouteName() == 'dashboard') active @endif">
                    <a href="{{ route('dashboard') }}" class="menu-link">
                        <i class="menu-icon tf-icons ri-home-smile-line"></i>
                        <div data-i18n="Dashboard">Dashboard</div>
                    </a>
                </li>
                <li class="menu-item
                    @if (Route::currentRouteName() == 'students.index' ||
                        Route::currentRouteName() == 'students.create' ||
                        Route::currentRouteName() == 'students.edit') active @endif"">
                    <a href="{{ route('students.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons ri-group-2-line"></i>
                        <div data-i18n="Estudiantes">Estudiantes</div>
                    </a>
                </li>
                 <li class="menu-item
                    @if (Route::currentRouteName() == 'registrations.index' ||
                        Route::currentRouteName() == 'registrations.create' ||
                        Route::currentRouteName() == 'registrations.edit') active @endif"">
                    <a href="{{ route('registrations.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons ri-group-2-line"></i>
                        <div data-i18n="Inscripciones">Inscripciones</div>
                    </a>
                </li>


                <li class="menu-header mt-5">
                    <span class="menu-header-text" data-i18n="Configuraciones">Configuraciones</span>
                </li>

                  <li class="menu-item
                    @if (Route::currentRouteName() == 'professors.index' ||
                        Route::currentRouteName() == 'professors.create' ||
                        Route::currentRouteName() == 'professors.edit') active @endif"">
                    <a href="{{ route('professors.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons ri-group-2-line"></i>
                        <div data-i18n="Profesores">Profesores</div>
                    </a>
                </li>
                 <li class="menu-item
                    @if (Route::currentRouteName() == 'courses.index' ||
                        Route::currentRouteName() == 'courses.create' ||
                        Route::currentRouteName() == 'courses.edit') active @endif"">
                    <a href="{{ route('courses.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons ri-group-2-line"></i>
                        <div data-i18n="Cursos">Cursos</div>
                    </a>
                </li>

                  <li class="menu-item
                    @if (Route::currentRouteName() == 'subjects.index' ||
                        Route::currentRouteName() == 'subjects.create' ||
                        Route::currentRouteName() == 'subjects.edit') active @endif"">
                    <a href="{{ route('subjects.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons ri-group-2-line"></i>
                        <div data-i18n="Materias">Materias</div>
                    </a>
                </li>
                 <li class="menu-item
                    @if (Route::currentRouteName() == 'quarters.index' ||
                        Route::currentRouteName() == 'quarters.create' ||
                        Route::currentRouteName() == 'quarters.edit') active @endif"">
                    <a href="{{ route('quarters.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons ri-group-2-line"></i>
                        <div data-i18n="Trimestres">Trimestres</div>
                    </a>
                </li>
                 <li class="menu-item
                    @if (Route::currentRouteName() == 'institutions.index' ||
                        Route::currentRouteName() == 'institutions.create' ||
                        Route::currentRouteName() == 'institutions.edit') active @endif"">
                    <a href="{{ route('institutions.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons ri-group-2-line"></i>
                        <div data-i18n="Institucion">Institucion</div>
                    </a>
                </li>
                <li class="menu-item
                    @if (Route::currentRouteName() == 'users.index' ||
                        Route::currentRouteName() == 'users.create' ||
                        Route::currentRouteName() == 'users.edit') active @endif"">
                    <a href="{{ route('users.index') }}" class="menu-link">
                        <i class="menu-icon tf-icons ri-group-2-line"></i>
                        <div data-i18n="Usuarios">Usuarios</div>
                    </a>
                </li>
            </ul>
        </aside>
