<?php

use Illuminate\Database\Seeder;
use App\Material;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $adminpubli = new Material();
    $adminpubli->descripcion = 'Ficha Administración Pública' ;
    $adminpubli->stock_total = '100';
    $adminpubli->activo = 1 ;
    $adminpubli -> save();

    $arqui = new Material();
    $arqui->descripcion = 'Ficha Arquitectura' ;
    $arqui->stock_total= 100;
    $arqui->activo = 1 ;
    $arqui -> save();

    $Bach = new Material();
    $Bach->descripcion = 'Ficha Bachillerato en Cs de la Ingeniería' ;
    $Bach->stock_total= 100;
    $Bach->activo = 1 ;
    $Bach -> save();

    $Biblio = new Material();
    $Biblio->descripcion = 'Ficha Bibliotecología y Documentación' ;
    $Biblio->stock_total= 100;
    $Biblio->activo = 1 ;
    $Biblio -> save();

    $carto = new Material();
    $carto->descripcion = 'Ficha Cartografía y Geomática' ;
    $carto->stock_total= 100;
    $carto->activo = 1 ;
    $carto -> save();

    $conta = new Material();
    $conta->descripcion = 'Ficha Contador Público y Auditor';
    $conta->stock_total = 100;
    $conta->activo = 1 ;
    $conta -> save();

    $dibujante = new Material();
    $dibujante->descripcion = 'Ficha Dibujante Proyectista';
    $dibujante->stock_total= 100;
    $dibujante->activo = 1 ;
    $dibujante-> save();

    $disenoComun = new Material();
    $disenoComun->descripcion = 'Ficha Diseño en Comunicación Visual';
    $disenoComun->stock_total= 100;
    $disenoComun->activo = 1 ;
    $disenoComun-> save();

    $disenoInd = new Material();
    $disenoInd->descripcion = 'Ficha Diseño Industrial';
    $disenoInd->stock_total= 100;
    $disenoInd->activo = 1 ;
    $disenoInd-> save();

    $CivilElect = new Material();
    $CivilElect->descripcion = 'Ficha Ingeniería Civil Electrónica';
    $CivilElect->stock_total= 100;
    $CivilElect->activo = 1 ;
    $CivilElect-> save();

    $CivilCompu = new Material();
    $CivilCompu->descripcion = 'Ficha Ing. Civil en Comp mención Informática';
    $CivilCompu->stock_total= 100;
    $CivilCompu->activo = 1 ;
    $CivilCompu-> save();

    $Civilmecanica = new Material();
    $Civilmecanica->descripcion = 'Ficha Ing Civil Mecánica' ;
    $Civilmecanica->stock_total= 100;
    $Civilmecanica->activo = 1 ;
    $Civilmecanica -> save();

    $CivilObras = new Material();
    $CivilObras->descripcion = 'Ficha Ingeniería Civil en Obras Civiles';
    $CivilObras->stock_total= 100;
    $CivilObras->activo = 1 ;
    $CivilObras-> save();

    $CivilIND = new Material();
    $CivilIND->descripcion = 'Ficha Ingeniería Civil Industrial';
    $CivilIND->stock_total= 100;
    $CivilIND->activo = 1 ;
    $CivilIND-> save();

    $CivilPrevencion = new Material();
    $CivilPrevencion->descripcion = 'Ficha Ing. Civil Prev de Riesgos y M A';
    $CivilPrevencion->stock_total= 100;
    $CivilPrevencion->activo = 1 ;
    $CivilPrevencion-> save();

    $Comercial = new Material();
    $Comercial->descripcion = 'Ficha Ingeniería Comercial';
    $Comercial->stock_total= 100;
    $Comercial->activo = 1 ;
    $Comercial-> save();

    $Agro = new Material();
    $Agro->descripcion = 'Ficha Ingeniería en Adm Agroindustrial';
    $Agro->stock_total= 100;
    $Agro->activo = 1 ;
    $Agro-> save();

    $Bio = new Material();
    $Bio->descripcion = 'Ficha Ingeniería en Biotecnología';
    $Bio->stock_total= 100;
    $Bio->activo = 1 ;
    $Bio-> save();

    $ComerioInter = new Material();
    $ComerioInter->descripcion = 'Ficha Ing. en Comercio Internacional';
    $ComerioInter->stock_total= 100;
    $ComerioInter->activo = 1 ;
    $ComerioInter-> save();

    $Constru = new Material();
    $Constru->descripcion = 'Ficha Ingeniería en Construcción';
    $Constru->stock_total= 100;
    $Constru->activo = 1 ;
    $Constru-> save();

    $Geo= new Material();
    $Geo->descripcion = 'Ficha Ingeniería en Geomensura';
    $Geo->stock_total= 100;
    $Geo->activo = 1 ;
    $Geo-> save();

    $GestionTuris = new Material();
    $GestionTuris->descripcion = 'Ficha Ingeniería en Gestión Turística';
    $GestionTuris->stock_total= 100;
    $GestionTuris->activo = 1 ;
    $GestionTuris-> save();

    $IndAlim = new Material();
    $IndAlim->descripcion = 'Ficha Ing. en Industria Alimentaria';
    $IndAlim->stock_total= 100;
    $IndAlim->activo = 1 ;
    $IndAlim-> save();

    $IngInfo = new Material();
    $IngInfo->descripcion = 'Ficha Ingeniería en Informática';
    $IngInfo->stock_total= 100;
    $IngInfo->activo = 1 ;
    $IngInfo-> save();

    $Transp = new Material();
    $Transp->descripcion = 'Ficha Ing. en Transporte y Tránsito';
    $Transp->stock_total= 100;
    $Transp->activo = 1 ;
    $Transp-> save();

    $IND = new Material();
    $IND->descripcion = 'Ficha Ingeniería Industrial';
    $IND->stock_total= 100;
    $IND->activo = 1 ;
    $IND-> save();

    $Quimic = new Material();
    $Quimic->descripcion = 'Ficha Ingeniería Química';
    $Quimic->stock_total= 100;
    $Quimic->activo = 1 ;
    $Quimic-> save();

    $QI = new Material();
    $QI->descripcion = 'Ficha Química Industrial';
    $QI->stock_total= 100;
    $QI->activo = 1 ;
    $QI-> save();

    $TrabSoc = new Material();
    $TrabSoc->descripcion = 'Ficha Trabajo Social';
    $TrabSoc->stock_total= 100;
    $TrabSoc->activo = 1 ;
    $TrabSoc-> save();

    $Offer = new Material();
    $Offer->descripcion = 'Ficha oferta académica y puntajes';
    $Offer->stock_total= 100;
    $Offer->activo = 1 ;
    $Offer-> save();

    $Espec = new Material();
    $Espec->descripcion = 'Folleto Ingresos Especiales';
    $Espec->stock_total= 100;
    $Espec->activo = 1 ;
    $Espec-> save();

    $GuiaA = new Material();
    $GuiaA->descripcion = 'Guía Academica';
    $GuiaA->stock_total= 100;
    $GuiaA->activo = 1 ;
    $GuiaA-> save();

    $Rinfo= new Material();
    $Rinfo->descripcion = 'Ficha para recibir información';
    $Rinfo->stock_total= 100;
    $Rinfo->activo = 1 ;
    $Rinfo-> save();

    $Lap = new Material();
    $Lap->descripcion = 'Lápices Ecológicos';
    $Lap->stock_total= 100;
    $Lap->activo = 1 ;
    $Lap-> save();

    $LapMG = new Material();
    $LapMG->descripcion = 'Lápices Me Gusta';
    $LapMG->stock_total= 100;
    $LapMG->activo = 1 ;
    $LapMG-> save();

    $Bols = new Material();
    $Bols->descripcion = 'Bolsas';
    $Bols->stock_total= 100;
    $Bols->activo = 1 ;
    $Bols-> save();

    $Morr = new Material();
    $Morr->descripcion = 'Morral';
    $Morr->stock_total= 100;
    $Morr->activo = 1 ;
    $Morr-> save();

    $Moch = new Material();
    $Moch->descripcion = 'Mochila';
    $Moch->stock_total= 100;
    $Moch->activo = 1 ;
    $Moch-> save();

    $Taz = new Material();
    $Taz->descripcion = 'Tazón';
    $Taz->stock_total= 100;
    $Taz->activo = 1 ;
    $Taz-> save();

    $Cuad = new Material();
    $Cuad->descripcion = 'Cuaderno';
    $Cuad->stock_total= 100;
    $Cuad->activo = 1 ;
    $Cuad-> save();

    $Libr = new Material();
    $Libr->descripcion = 'Libreta';
    $Libr->stock_total= 100;
    $Libr->activo = 1 ;
    $Libr-> save();

    $Stda = new Material();
    $Stda->descripcion = 'Stand plegable';
    $Stda->stock_total= 100;
    $Stda->activo = 1 ;
    $Stda-> save();

    $Pend = new Material();
    $Pend->descripcion = 'Pendón';
    $Pend->stock_total= 100;
    $Pend->activo = 1 ;
    $Pend-> save();

    $Paraña = new Material();
    $Paraña->descripcion = 'Panel Araña';
    $Paraña->stock_total= 100;
    $Paraña->activo = 1 ;
    $Paraña-> save();

    $Mant = new Material();
    $Mant->descripcion = 'Mantel';
    $Mant->stock_total= 100;
    $Mant->activo = 1 ;
    $Mant-> save();

    $Chaq = new Material();
    $Chaq->descripcion = 'Chaqueta';
    $Chaq->stock_total= 100;
    $Chaq->activo = 1 ;
    $Chaq-> save();

    $Poleron = new Material();
    $Poleron->descripcion = 'Poleron';
    $Poleron->stock_total= 100;
    $Poleron->activo = 1 ;
    $Poleron-> save();

    $Polera = new Material();
    $Polera->descripcion = 'Polera';
    $Polera->stock_total= 100;
    $Polera->activo = 1 ;
    $Polera-> save();
    }
}
