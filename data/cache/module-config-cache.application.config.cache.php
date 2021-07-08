<?php
return [
    'service_manager' => [
        'abstract_factories' => [
            0 => 'Laminas\\Form\\FormAbstractServiceFactory',
            'DoctrineModule' => 'DoctrineModule\\ServiceFactory\\AbstractDoctrineServiceFactory'
        ],
        'aliases' => [
            'Laminas\\Form\\Annotation\\FormAnnotationBuilder' => 'FormAnnotationBuilder',
            'Laminas\\Form\\Annotation\\AnnotationBuilder' => 'FormAnnotationBuilder',
            'Laminas\\Form\\FormElementManager' => 'FormElementManager',
            'Zend\\Form\\Annotation\\FormAnnotationBuilder' => 'Laminas\\Form\\Annotation\\FormAnnotationBuilder',
            'Zend\\Form\\Annotation\\AnnotationBuilder' => 'Laminas\\Form\\Annotation\\AnnotationBuilder',
            'Zend\\Form\\FormElementManager' => 'Laminas\\Form\\FormElementManager',
            'HydratorManager' => 'Laminas\\Hydrator\\HydratorPluginManager',
            'Zend\\Hydrator\\HydratorPluginManager' => 'Laminas\\Hydrator\\HydratorPluginManager',
            'Zend\\Hydrator\\StandaloneHydratorPluginManager' => 'Laminas\\Hydrator\\StandaloneHydratorPluginManager',
            'Di' => 'DependencyInjector',
            'Zend\\Di\\LocatorInterface' => 'DependencyInjector',
            'HttpRouter' => 'Laminas\\Router\\Http\\TreeRouteStack',
            'router' => 'Laminas\\Router\\RouteStackInterface',
            'Router' => 'Laminas\\Router\\RouteStackInterface',
            'RoutePluginManager' => 'Laminas\\Router\\RoutePluginManager',
            'Zend\\Router\\Http\\TreeRouteStack' => 'Laminas\\Router\\Http\\TreeRouteStack',
            'Zend\\Router\\RoutePluginManager' => 'Laminas\\Router\\RoutePluginManager',
            'Zend\\Router\\RouteStackInterface' => 'Laminas\\Router\\RouteStackInterface',
            'ValidatorManager' => 'Laminas\\Validator\\ValidatorPluginManager',
            'Zend\\Validator\\ValidatorPluginManager' => 'Laminas\\Validator\\ValidatorPluginManager'
        ],
        'factories' => [
            'FormAnnotationBuilder' => 'Laminas\\Form\\Annotation\\AnnotationBuilderFactory',
            'FormElementManager' => 'Laminas\\Form\\FormElementManagerFactory',
            'Laminas\\Hydrator\\HydratorPluginManager' => 'Laminas\\Hydrator\\HydratorPluginManagerFactory',
            'Laminas\\Hydrator\\StandaloneHydratorPluginManager' => 'Laminas\\Hydrator\\StandaloneHydratorPluginManagerFactory',
            'DependencyInjector' => 'Zend\\ServiceManager\\Di\\DiFactory',
            'DiAbstractServiceFactory' => 'Zend\\ServiceManager\\Di\\DiAbstractServiceFactoryFactory',
            'DiServiceInitializer' => 'Zend\\ServiceManager\\Di\\DiServiceInitializerFactory',
            'DiStrictAbstractServiceFactory' => 'Zend\\ServiceManager\\Di\\DiStrictAbstractServiceFactoryFactory',
            'Laminas\\Router\\Http\\TreeRouteStack' => 'Laminas\\Router\\Http\\HttpRouterFactory',
            'Laminas\\Router\\RoutePluginManager' => 'Laminas\\Router\\RoutePluginManagerFactory',
            'Laminas\\Router\\RouteStackInterface' => 'Laminas\\Router\\RouterFactory',
            'Laminas\\Validator\\ValidatorPluginManager' => 'Laminas\\Validator\\ValidatorPluginManagerFactory',
            'doctrine.cli' => 'DoctrineModule\\Service\\CliFactory',
            'DoctrineORMModule\\CliConfigurator' => 'DoctrineORMModule\\Service\\CliConfiguratorFactory',
            'Doctrine\\ORM\\EntityManager' => 'DoctrineORMModule\\Service\\EntityManagerAliasCompatFactory',
            'doctrine.dbal_cmd.runsql' => 'DoctrineORMModule\\Service\\RunSqlCommandFactory'
        ],
        'invokables' => [
            'DoctrineModule\\Authentication\\Storage\\Session' => 'Laminas\\Authentication\\Storage\\Session',
            'doctrine.dbal_cmd.import' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\ImportCommand',
            'doctrine.orm_cmd.clear_cache_metadata' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\MetadataCommand',
            'doctrine.orm_cmd.clear_cache_result' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\ResultCommand',
            'doctrine.orm_cmd.clear_cache_query' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryCommand',
            'doctrine.orm_cmd.schema_tool_create' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\CreateCommand',
            'doctrine.orm_cmd.schema_tool_update' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\UpdateCommand',
            'doctrine.orm_cmd.schema_tool_drop' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\DropCommand',
            'doctrine.orm_cmd.convert_d1_schema' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ConvertDoctrine1SchemaCommand',
            'doctrine.orm_cmd.generate_entities' => 'Doctrine\\ORM\\Tools\\Console\\Command\\GenerateEntitiesCommand',
            'doctrine.orm_cmd.generate_proxies' => 'Doctrine\\ORM\\Tools\\Console\\Command\\GenerateProxiesCommand',
            'doctrine.orm_cmd.convert_mapping' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ConvertMappingCommand',
            'doctrine.orm_cmd.run_dql' => 'Doctrine\\ORM\\Tools\\Console\\Command\\RunDqlCommand',
            'doctrine.orm_cmd.validate_schema' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ValidateSchemaCommand',
            'doctrine.orm_cmd.info' => 'Doctrine\\ORM\\Tools\\Console\\Command\\InfoCommand',
            'doctrine.orm_cmd.ensure_production_settings' => 'Doctrine\\ORM\\Tools\\Console\\Command\\EnsureProductionSettingsCommand',
            'doctrine.orm_cmd.generate_repositories' => 'Doctrine\\ORM\\Tools\\Console\\Command\\GenerateRepositoriesCommand'
        ]
    ],
    'view_helpers' => [
        'aliases' => [
            'form' => 'Laminas\\Form\\View\\Helper\\Form',
            'Form' => 'Laminas\\Form\\View\\Helper\\Form',
            'formbutton' => 'Laminas\\Form\\View\\Helper\\FormButton',
            'form_button' => 'Laminas\\Form\\View\\Helper\\FormButton',
            'formButton' => 'Laminas\\Form\\View\\Helper\\FormButton',
            'FormButton' => 'Laminas\\Form\\View\\Helper\\FormButton',
            'formcaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
            'form_captcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
            'formCaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
            'FormCaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
            'captchadumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'captcha_dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'captcha/dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'CaptchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'captchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'formcaptchadumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'form_captcha_dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'formCaptchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'FormCaptchaDumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'captchafiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'captcha/figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'captcha_figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'captchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'CaptchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'formcaptchafiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'form_captcha_figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'formCaptchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'FormCaptchaFiglet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'captchaimage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'captcha/image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'captcha_image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'captchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'CaptchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'formcaptchaimage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'form_captcha_image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'formCaptchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'FormCaptchaImage' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'captcharecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'captcha/recaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'captcha_recaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'captchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'CaptchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'formcaptcharecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'form_captcha_recaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'formCaptchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'FormCaptchaRecaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'formcheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
            'form_checkbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
            'formCheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
            'FormCheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
            'formcollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
            'form_collection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
            'formCollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
            'FormCollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
            'formcolor' => 'Laminas\\Form\\View\\Helper\\FormColor',
            'form_color' => 'Laminas\\Form\\View\\Helper\\FormColor',
            'formColor' => 'Laminas\\Form\\View\\Helper\\FormColor',
            'FormColor' => 'Laminas\\Form\\View\\Helper\\FormColor',
            'formdate' => 'Laminas\\Form\\View\\Helper\\FormDate',
            'form_date' => 'Laminas\\Form\\View\\Helper\\FormDate',
            'formDate' => 'Laminas\\Form\\View\\Helper\\FormDate',
            'FormDate' => 'Laminas\\Form\\View\\Helper\\FormDate',
            'formdatetime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
            'form_date_time' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
            'formDateTime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
            'FormDateTime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
            'formdatetimelocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
            'form_date_time_local' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
            'formDateTimeLocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
            'FormDateTimeLocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
            'formdatetimeselect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
            'form_date_time_select' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
            'formDateTimeSelect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
            'FormDateTimeSelect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
            'formdateselect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
            'form_date_select' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
            'formDateSelect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
            'FormDateSelect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
            'form_element' => 'Laminas\\Form\\View\\Helper\\FormElement',
            'formelement' => 'Laminas\\Form\\View\\Helper\\FormElement',
            'formElement' => 'Laminas\\Form\\View\\Helper\\FormElement',
            'FormElement' => 'Laminas\\Form\\View\\Helper\\FormElement',
            'form_element_errors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
            'formelementerrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
            'formElementErrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
            'FormElementErrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
            'form_email' => 'Laminas\\Form\\View\\Helper\\FormEmail',
            'formemail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
            'formEmail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
            'FormEmail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
            'form_file' => 'Laminas\\Form\\View\\Helper\\FormFile',
            'formfile' => 'Laminas\\Form\\View\\Helper\\FormFile',
            'formFile' => 'Laminas\\Form\\View\\Helper\\FormFile',
            'FormFile' => 'Laminas\\Form\\View\\Helper\\FormFile',
            'formfileapcprogress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
            'form_file_apc_progress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
            'formFileApcProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
            'FormFileApcProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
            'formfilesessionprogress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
            'form_file_session_progress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
            'formFileSessionProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
            'FormFileSessionProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
            'formfileuploadprogress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
            'form_file_upload_progress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
            'formFileUploadProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
            'FormFileUploadProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
            'formhidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
            'form_hidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
            'formHidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
            'FormHidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
            'formimage' => 'Laminas\\Form\\View\\Helper\\FormImage',
            'form_image' => 'Laminas\\Form\\View\\Helper\\FormImage',
            'formImage' => 'Laminas\\Form\\View\\Helper\\FormImage',
            'FormImage' => 'Laminas\\Form\\View\\Helper\\FormImage',
            'forminput' => 'Laminas\\Form\\View\\Helper\\FormInput',
            'form_input' => 'Laminas\\Form\\View\\Helper\\FormInput',
            'formInput' => 'Laminas\\Form\\View\\Helper\\FormInput',
            'FormInput' => 'Laminas\\Form\\View\\Helper\\FormInput',
            'formlabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
            'form_label' => 'Laminas\\Form\\View\\Helper\\FormLabel',
            'formLabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
            'FormLabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
            'formmonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
            'form_month' => 'Laminas\\Form\\View\\Helper\\FormMonth',
            'formMonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
            'FormMonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
            'formmonthselect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
            'form_month_select' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
            'formMonthSelect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
            'FormMonthSelect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
            'formmulticheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
            'form_multi_checkbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
            'formMultiCheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
            'FormMultiCheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
            'formnumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
            'form_number' => 'Laminas\\Form\\View\\Helper\\FormNumber',
            'formNumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
            'FormNumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
            'formpassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
            'form_password' => 'Laminas\\Form\\View\\Helper\\FormPassword',
            'formPassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
            'FormPassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
            'formradio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
            'form_radio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
            'formRadio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
            'FormRadio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
            'formrange' => 'Laminas\\Form\\View\\Helper\\FormRange',
            'form_range' => 'Laminas\\Form\\View\\Helper\\FormRange',
            'formRange' => 'Laminas\\Form\\View\\Helper\\FormRange',
            'FormRange' => 'Laminas\\Form\\View\\Helper\\FormRange',
            'formreset' => 'Laminas\\Form\\View\\Helper\\FormReset',
            'form_reset' => 'Laminas\\Form\\View\\Helper\\FormReset',
            'formReset' => 'Laminas\\Form\\View\\Helper\\FormReset',
            'FormReset' => 'Laminas\\Form\\View\\Helper\\FormReset',
            'formrow' => 'Laminas\\Form\\View\\Helper\\FormRow',
            'form_row' => 'Laminas\\Form\\View\\Helper\\FormRow',
            'formRow' => 'Laminas\\Form\\View\\Helper\\FormRow',
            'FormRow' => 'Laminas\\Form\\View\\Helper\\FormRow',
            'formsearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
            'form_search' => 'Laminas\\Form\\View\\Helper\\FormSearch',
            'formSearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
            'FormSearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
            'formselect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
            'form_select' => 'Laminas\\Form\\View\\Helper\\FormSelect',
            'formSelect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
            'FormSelect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
            'formsubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
            'form_submit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
            'formSubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
            'FormSubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
            'formtel' => 'Laminas\\Form\\View\\Helper\\FormTel',
            'form_tel' => 'Laminas\\Form\\View\\Helper\\FormTel',
            'formTel' => 'Laminas\\Form\\View\\Helper\\FormTel',
            'FormTel' => 'Laminas\\Form\\View\\Helper\\FormTel',
            'formtext' => 'Laminas\\Form\\View\\Helper\\FormText',
            'form_text' => 'Laminas\\Form\\View\\Helper\\FormText',
            'formText' => 'Laminas\\Form\\View\\Helper\\FormText',
            'FormText' => 'Laminas\\Form\\View\\Helper\\FormText',
            'formtextarea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
            'form_text_area' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
            'formTextarea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
            'formTextArea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
            'FormTextArea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
            'formtime' => 'Laminas\\Form\\View\\Helper\\FormTime',
            'form_time' => 'Laminas\\Form\\View\\Helper\\FormTime',
            'formTime' => 'Laminas\\Form\\View\\Helper\\FormTime',
            'FormTime' => 'Laminas\\Form\\View\\Helper\\FormTime',
            'formurl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
            'form_url' => 'Laminas\\Form\\View\\Helper\\FormUrl',
            'formUrl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
            'FormUrl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
            'formweek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
            'form_week' => 'Laminas\\Form\\View\\Helper\\FormWeek',
            'formWeek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
            'FormWeek' => 'Laminas\\Form\\View\\Helper\\FormWeek',
            'Zend\\Form\\View\\Helper\\Form' => 'Laminas\\Form\\View\\Helper\\Form',
            'Zend\\Form\\View\\Helper\\FormButton' => 'Laminas\\Form\\View\\Helper\\FormButton',
            'Zend\\Form\\View\\Helper\\FormCaptcha' => 'Laminas\\Form\\View\\Helper\\FormCaptcha',
            'Zend\\Form\\View\\Helper\\Captcha\\Dumb' => 'Laminas\\Form\\View\\Helper\\Captcha\\Dumb',
            'Zend\\Form\\View\\Helper\\Captcha\\Figlet' => 'Laminas\\Form\\View\\Helper\\Captcha\\Figlet',
            'Zend\\Form\\View\\Helper\\Captcha\\Image' => 'Laminas\\Form\\View\\Helper\\Captcha\\Image',
            'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha' => 'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha',
            'Zend\\Form\\View\\Helper\\FormCheckbox' => 'Laminas\\Form\\View\\Helper\\FormCheckbox',
            'Zend\\Form\\View\\Helper\\FormCollection' => 'Laminas\\Form\\View\\Helper\\FormCollection',
            'Zend\\Form\\View\\Helper\\FormColor' => 'Laminas\\Form\\View\\Helper\\FormColor',
            'Zend\\Form\\View\\Helper\\FormDate' => 'Laminas\\Form\\View\\Helper\\FormDate',
            'Zend\\Form\\View\\Helper\\FormDateTime' => 'Laminas\\Form\\View\\Helper\\FormDateTime',
            'Zend\\Form\\View\\Helper\\FormDateTimeLocal' => 'Laminas\\Form\\View\\Helper\\FormDateTimeLocal',
            'Zend\\Form\\View\\Helper\\FormDateTimeSelect' => 'Laminas\\Form\\View\\Helper\\FormDateTimeSelect',
            'Zend\\Form\\View\\Helper\\FormDateSelect' => 'Laminas\\Form\\View\\Helper\\FormDateSelect',
            'Zend\\Form\\View\\Helper\\FormElement' => 'Laminas\\Form\\View\\Helper\\FormElement',
            'Zend\\Form\\View\\Helper\\FormElementErrors' => 'Laminas\\Form\\View\\Helper\\FormElementErrors',
            'Zend\\Form\\View\\Helper\\FormEmail' => 'Laminas\\Form\\View\\Helper\\FormEmail',
            'Zend\\Form\\View\\Helper\\FormFile' => 'Laminas\\Form\\View\\Helper\\FormFile',
            'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress',
            'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress',
            'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress' => 'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress',
            'Zend\\Form\\View\\Helper\\FormHidden' => 'Laminas\\Form\\View\\Helper\\FormHidden',
            'Zend\\Form\\View\\Helper\\FormImage' => 'Laminas\\Form\\View\\Helper\\FormImage',
            'Zend\\Form\\View\\Helper\\FormInput' => 'Laminas\\Form\\View\\Helper\\FormInput',
            'Zend\\Form\\View\\Helper\\FormLabel' => 'Laminas\\Form\\View\\Helper\\FormLabel',
            'Zend\\Form\\View\\Helper\\FormMonth' => 'Laminas\\Form\\View\\Helper\\FormMonth',
            'Zend\\Form\\View\\Helper\\FormMonthSelect' => 'Laminas\\Form\\View\\Helper\\FormMonthSelect',
            'Zend\\Form\\View\\Helper\\FormMultiCheckbox' => 'Laminas\\Form\\View\\Helper\\FormMultiCheckbox',
            'Zend\\Form\\View\\Helper\\FormNumber' => 'Laminas\\Form\\View\\Helper\\FormNumber',
            'Zend\\Form\\View\\Helper\\FormPassword' => 'Laminas\\Form\\View\\Helper\\FormPassword',
            'Zend\\Form\\View\\Helper\\FormRadio' => 'Laminas\\Form\\View\\Helper\\FormRadio',
            'Zend\\Form\\View\\Helper\\FormRange' => 'Laminas\\Form\\View\\Helper\\FormRange',
            'Zend\\Form\\View\\Helper\\FormReset' => 'Laminas\\Form\\View\\Helper\\FormReset',
            'Zend\\Form\\View\\Helper\\FormRow' => 'Laminas\\Form\\View\\Helper\\FormRow',
            'Zend\\Form\\View\\Helper\\FormSearch' => 'Laminas\\Form\\View\\Helper\\FormSearch',
            'Zend\\Form\\View\\Helper\\FormSelect' => 'Laminas\\Form\\View\\Helper\\FormSelect',
            'Zend\\Form\\View\\Helper\\FormSubmit' => 'Laminas\\Form\\View\\Helper\\FormSubmit',
            'Zend\\Form\\View\\Helper\\FormTel' => 'Laminas\\Form\\View\\Helper\\FormTel',
            'Zend\\Form\\View\\Helper\\FormText' => 'Laminas\\Form\\View\\Helper\\FormText',
            'Zend\\Form\\View\\Helper\\FormTextarea' => 'Laminas\\Form\\View\\Helper\\FormTextarea',
            'Zend\\Form\\View\\Helper\\FormTime' => 'Laminas\\Form\\View\\Helper\\FormTime',
            'Zend\\Form\\View\\Helper\\FormUrl' => 'Laminas\\Form\\View\\Helper\\FormUrl',
            'Zend\\Form\\View\\Helper\\FormWeek' => 'Laminas\\Form\\View\\Helper\\FormWeek'
        ],
        'factories' => [
            'Laminas\\Form\\View\\Helper\\Form' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormButton' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormCaptcha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\Captcha\\Dumb' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\Captcha\\Figlet' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\Captcha\\Image' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\Captcha\\ReCaptcha' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormCheckbox' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormCollection' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormColor' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormDate' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormDateTime' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormDateTimeLocal' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormDateTimeSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormDateSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormElement' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormElementErrors' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormEmail' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormFile' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\File\\FormFileApcProgress' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\File\\FormFileSessionProgress' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\File\\FormFileUploadProgress' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormHidden' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormImage' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormInput' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormLabel' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormMonth' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormMonthSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormMultiCheckbox' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormNumber' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormPassword' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormRadio' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormRange' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormReset' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormRow' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormSearch' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormSelect' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormSubmit' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormTel' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormText' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormTextarea' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormTime' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormUrl' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory',
            'Laminas\\Form\\View\\Helper\\FormWeek' => 'Laminas\\ServiceManager\\Factory\\InvokableFactory'
        ]
    ],
    'route_manager' => [
        'factories' => [
            'symfony_cli' => 'DoctrineModule\\Service\\SymfonyCliRouteFactory'
        ]
    ],
    'router' => [
        'routes' => [
            'doctrine_orm_module_yuml' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/ocra_service_manager_yuml',
                    'defaults' => [
                        'controller' => 'DoctrineORMModule\\Yuml\\YumlController',
                        'action' => 'index'
                    ]
                ]
            ],
            'home' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => 'Application\\Controller\\IndexController',
                        'action' => 'index'
                    ]
                ]
            ],
            'application' => [
                'type' => 'Laminas\\Router\\Http\\Literal',
                'options' => [
                    'route' => '/search',
                    'defaults' => [
                        'controller' => 'Application\\Controller\\IndexController',
                        'action' => 'search'
                    ]
                ]
            ]
        ]
    ],
    'doctrine' => [
        'cache' => [
            'apc' => [
                'class' => 'Doctrine\\Common\\Cache\\ApcCache',
                'namespace' => 'DoctrineModule'
            ],
            'apcu' => [
                'class' => 'Doctrine\\Common\\Cache\\ApcuCache',
                'namespace' => 'DoctrineModule'
            ],
            'array' => [
                'class' => 'Doctrine\\Common\\Cache\\ArrayCache',
                'namespace' => 'DoctrineModule'
            ],
            'filesystem' => [
                'class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
                'directory' => 'data/DoctrineModule/cache',
                'namespace' => 'DoctrineModule'
            ],
            'memcache' => [
                'class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
                'instance' => 'my_memcache_alias',
                'namespace' => 'DoctrineModule'
            ],
            'memcached' => [
                'class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
                'instance' => 'my_memcached_alias',
                'namespace' => 'DoctrineModule'
            ],
            'predis' => [
                'class' => 'Doctrine\\Common\\Cache\\PredisCache',
                'instance' => 'my_predis_alias',
                'namespace' => 'DoctrineModule'
            ],
            'redis' => [
                'class' => 'Doctrine\\Common\\Cache\\RedisCache',
                'instance' => 'my_redis_alias',
                'namespace' => 'DoctrineModule'
            ],
            'wincache' => [
                'class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
                'namespace' => 'DoctrineModule'
            ],
            'xcache' => [
                'class' => 'Doctrine\\Common\\Cache\\XcacheCache',
                'namespace' => 'DoctrineModule'
            ],
            'zenddata' => [
                'class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
                'namespace' => 'DoctrineModule'
            ]
        ],
        'authentication' => [
            'odm_default' => [],
            'orm_default' => [
                'objectManager' => 'doctrine.entitymanager.orm_default'
            ]
        ],
        'authenticationadapter' => [
            'odm_default' => true,
            'orm_default' => true
        ],
        'authenticationstorage' => [
            'odm_default' => true,
            'orm_default' => true
        ],
        'authenticationservice' => [
            'odm_default' => true,
            'orm_default' => true
        ],
        'connection' => [
            'orm_default' => [
                'configuration' => 'orm_default',
                'eventmanager' => 'orm_default',
                'params' => [
                    'host' => false,
                    'port' => '3306',
                    'user' => false,
                    'password' => false,
                    'dbname' => false,
                    'driver' => 'pdo_mysql',
                    'charset' => 'utf8'
                ]
            ]
        ],
        'configuration' => [
            'orm_default' => [
                'metadata_cache' => 'array',
                'query_cache' => 'array',
                'result_cache' => 'array',
                'hydration_cache' => 'array',
                'driver' => 'orm_default',
                'generate_proxies' => true,
                'proxy_dir' => 'data/DoctrineORMModule/Proxy',
                'proxy_namespace' => 'DoctrineORMModule\\Proxy',
                'filters' => [],
                'datetime_functions' => [],
                'string_functions' => [],
                'numeric_functions' => [],
                'second_level_cache' => []
            ]
        ],
        'driver' => [
            'orm_default' => [
                'class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
                'drivers' => [
                    'Application\\Entity' => 'Application\\_driver'
                ]
            ],
            'Application\\_driver' => [
                'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
                'cache' => 'array',
                'paths' => [
                    'module/Application/src/Entity'
                ]
            ]
        ],
        'entitymanager' => [
            'orm_default' => [
                'connection' => 'orm_default',
                'configuration' => 'orm_default'
            ]
        ],
        'eventmanager' => [
            'orm_default' => []
        ],
        'sql_logger_collector' => [
            'orm_default' => []
        ],
        'mapping_collector' => [
            'orm_default' => []
        ],
        'entity_resolver' => [
            'orm_default' => []
        ],
        'migrations_configuration' => [
            'orm_default' => [
                'table_storage' => [
                    'table_name' => 'DoctrineMigrationVersions',
                    'version_column_name' => 'version',
                    'version_column_length' => 1024,
                    'executed_at_column_name' => 'executedAt',
                    'execution_time_column_name' => 'executionTime'
                ],
                'migrations_paths' => [],
                'migrations' => [],
                'all_or_nothing' => false,
                'check_database_platform' => true,
                'custom_template' => null,
                'dependency_factory_services' => []
            ]
        ],
        'migrations_cmd' => [
            'current' => [],
            'dumpschema' => [],
            'diff' => [],
            'generate' => [],
            'execute' => [],
            'latest' => [],
            'list' => [],
            'migrate' => [],
            'rollup' => [],
            'status' => [],
            'syncmetadatastorage' => [],
            'uptodate' => [],
            'version' => []
        ]
    ],
    'doctrine_factories' => [
        'cache' => 'DoctrineModule\\Service\\CacheFactory',
        'eventmanager' => 'DoctrineModule\\Service\\EventManagerFactory',
        'driver' => 'DoctrineModule\\Service\\DriverFactory',
        'authenticationadapter' => 'DoctrineModule\\Service\\Authentication\\AdapterFactory',
        'authenticationstorage' => 'DoctrineModule\\Service\\Authentication\\StorageFactory',
        'authenticationservice' => 'DoctrineModule\\Service\\Authentication\\AuthenticationServiceFactory',
        'connection' => 'DoctrineORMModule\\Service\\DBALConnectionFactory',
        'configuration' => 'DoctrineORMModule\\Service\\ConfigurationFactory',
        'entitymanager' => 'DoctrineORMModule\\Service\\EntityManagerFactory',
        'entity_resolver' => 'DoctrineORMModule\\Service\\EntityResolverFactory',
        'sql_logger_collector' => 'DoctrineORMModule\\Service\\SQLLoggerCollectorFactory',
        'mapping_collector' => 'DoctrineORMModule\\Service\\MappingCollectorFactory',
        'migrations_cmd' => 'DoctrineORMModule\\Service\\MigrationsCommandFactory'
    ],
    'controllers' => [
        'factories' => [
            'DoctrineModule\\Controller\\Cli' => 'DoctrineModule\\Service\\CliControllerFactory',
            'Application\\Controller\\IndexController' => 'Application\\Controller\\Factory\\IndexControllerFactory'
        ]
    ],
    'console' => [
        'router' => [
            'routes' => [
                'doctrine_cli' => [
                    'type' => 'symfony_cli'
                ]
            ]
        ]
    ],
    'validators' => [
        'aliases' => [
            'DoctrineNoObjectExists' => 'DoctrineModule\\Validator\\NoObjectExists',
            'DoctrineObjectExists' => 'DoctrineModule\\Validator\\ObjectExists',
            'DoctrineUniqueObject' => 'DoctrineModule\\Validator\\UniqueObject'
        ],
        'factories' => [
            'DoctrineModule\\Validator\\NoObjectExists' => 'DoctrineModule\\Validator\\Service\\NoObjectExistsFactory',
            'DoctrineModule\\Validator\\ObjectExists' => 'DoctrineModule\\Validator\\Service\\ObjectExistsFactory',
            'DoctrineModule\\Validator\\UniqueObject' => 'DoctrineModule\\Validator\\Service\\UniqueObjectFactory'
        ]
    ],
    'form_elements' => [
        'aliases' => [
            'objectselect' => 'DoctrineModule\\Form\\Element\\ObjectSelect',
            'objectradio' => 'DoctrineModule\\Form\\Element\\ObjectRadio',
            'objectmulticheckbox' => 'DoctrineModule\\Form\\Element\\ObjectMultiCheckbox'
        ],
        'factories' => [
            'DoctrineModule\\Form\\Element\\ObjectSelect' => 'DoctrineORMModule\\Service\\ObjectSelectFactory',
            'DoctrineModule\\Form\\Element\\ObjectRadio' => 'DoctrineORMModule\\Service\\ObjectRadioFactory',
            'DoctrineModule\\Form\\Element\\ObjectMultiCheckbox' => 'DoctrineORMModule\\Service\\ObjectMultiCheckboxFactory'
        ]
    ],
    'hydrators' => [
        'factories' => [
            'Doctrine\\Laminas\\Hydrator\\DoctrineObject' => 'DoctrineORMModule\\Service\\DoctrineObjectHydratorFactory'
        ]
    ],
    'view_manager' => [
        'template_map' => [
            'laminas-developer-tools/toolbar/doctrine-orm-queries' => '/home/dell/Downloads/test task/vendor/doctrine/doctrine-orm-module/config/../view/laminas-developer-tools/toolbar/doctrine-orm-queries.phtml',
            'laminas-developer-tools/toolbar/doctrine-orm-mappings' => '/home/dell/Downloads/test task/vendor/doctrine/doctrine-orm-module/config/../view/laminas-developer-tools/toolbar/doctrine-orm-mappings.phtml',
            'layout/layout' => '/home/dell/Downloads/test task/module/Application/config/../view/layout/layout.phtml',
            'application/index/index' => '/home/dell/Downloads/test task/module/Application/config/../view/application/index/index.phtml',
            'error/404' => '/home/dell/Downloads/test task/module/Application/config/../view/error/404.phtml',
            'error/index' => '/home/dell/Downloads/test task/module/Application/config/../view/error/index.phtml'
        ],
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_path_stack' => [
            '/home/dell/Downloads/test task/module/Application/config/../view'
        ],
        'strategies' => [
            'ViewJsonStrategy'
        ]
    ],
    'laminas-developer-tools' => [
        'profiler' => [
            'collectors' => [
                'doctrine.sql_logger_collector.orm_default' => 'doctrine.sql_logger_collector.orm_default',
                'doctrine.mapping_collector.orm_default' => 'doctrine.mapping_collector.orm_default'
            ]
        ],
        'toolbar' => [
            'entries' => [
                'doctrine.sql_logger_collector.orm_default' => 'laminas-developer-tools/toolbar/doctrine-orm-queries',
                'doctrine.mapping_collector.orm_default' => 'laminas-developer-tools/toolbar/doctrine-orm-mappings'
            ]
        ]
    ]
];
