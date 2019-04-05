# Maintenance-Fix

Durch ein kleines Problem in Contao 4, kann die Systemwartung nicht mit weiteren Inhalten erweitert werden, da das Interface \executable nicht geladen werdewn kann.

Das genaue Problem kann hier eingesehen werden https://github.com/contao/contao/issues/89

## Install

Entweder im Contao-Manager nach `sioweb/maintenance-fix` suchen, oder über die Konsole `composer req sioweb/maintenance-fix`

## Wie functioniert das Tool?

Das Modul fügt Inahlte an den Anfang der Systemwartung hinzu. 

```
$GLOBALS['TL_MAINTENANCE_EXTENDED'][] = 'EUER MODUL/SERVICE/KLASSE';
```

Euer Modul muss dann in jedem Fall vom Interface Sioweb\MaintenanceFix\Modules\ExecutableInterface ableiten:

```
use Sioweb\MaintenanceFix\Modules\ExecutableInterface;

class YourClass extends ExecutableInterface {
}
```

Dieses Modul ist nur ein Workarround für Contao-Versionen, in denen der oben genannte Bug noch nicht behoben ist.

BTW. Danke an das Contao-Team für Ihren Einsatz!
