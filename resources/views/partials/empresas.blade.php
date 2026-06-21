{{--
    Section router. The parent's sub-brand showcase and a sub-brand's services
    grid are different enough in intent that they get separate partials rather
    than one overloaded template:

      parent     → partials.empresas-parent   (the showcase — page centerpiece)
      sub-brand  → partials.empresas-services (its own offer grid)

    Both share .card styling; the parent version adds presence + connection.
--}}
@if ($brand['key'] === 'parent')
@includeWhen(!empty($brand['children']), 'partials.empresas-parent')
@else
@includeWhen(!empty($brand['services']), 'partials.empresas-services')
@endif