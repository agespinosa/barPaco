31 - Formularios. Clase Request
  https://api.symfony.com/3.4/Symfony/Component/HttpFoundation/Request.html

32 - Formularios. Insertar nueva tapa
  https://symfony.com/doc/3.4/forms.html
  https://symfony.com/doc/3.4/doctrine.html

33 - Formularios. CKEditor 
   comandos instalacion
      composer require egeloen/ckeditor-bundle
      php bin/console ckeditor:install
      php bin/console assets:install

34 - Formularios. Diseño del render manual
  https://symfony.com/doc/3.4/form/form_customization.html
  https://symfony.com/doc/3.4/form/rendering.html

35 - Formularios. Diseño con themes
  https://symfony.com/doc/3.4/form/form_customization.html
  vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig

36 - Formularios. FileType
    https://symfony.com/doc/3.4/reference/forms/types/form.html#attr
    https://symfony.com/doc/3.4/reference/forms/types/file.html

37 - Formularios. FileType. Parte II
    https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file    

38 - Formularios. Uploaded File
    https://symfony.com/doc/3.4/controller/upload_file.html

39 - Visualizar foto de tapa. Global parameters
    https://symfony.com/doc/3.4/templating/global_variables.html
    https://twig.symfony.com/doc/2.x/templates.html#math

40 - Categorias. Relacion OneToMany
    https://symfony.com/doc/3.4/doctrine/associations.html
      php bin/console doctrine:generate:entity
      php bin/console doctrine:schema:update --force
      php bin/console doctrine:generate:entities AppBundle
      php bin/console doctrine:schema:validate

41 - Categorias. Insertar nueva

42 - Tapa. Selector de categoria
    https://symfony.com/doc/3.4/reference/forms/types/choice.html
    https://symfony.com/doc/3.4/reference/forms/types/entity.html

43 - Ingredientes. ManyToMany Unidireccional
    https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/reference/association-mapping.html#many-to-many-unidirectional
    php bin/console doctrine:generate:entity
    php bin/console doctrine:schema:update --force
    php bin/console doctrine:generate:entities AppBundle

44 - Paginación de las tapas. QueryBuilder. Parte I
    https://www.doctrine-project.org/projects/doctrine-orm/en/2.6/tutorials/pagination.html
    https://symfony.com/doc/3.4/doctrine.html#querying-for-objects-using-doctrine-s-query-builder

45 - Paginación de las tapas. QueryBuilder. Parte II
    https://twig.symfony.com/doc/2.x/tags/for.html    
