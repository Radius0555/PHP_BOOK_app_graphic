<?php

function sprawdz_bledy()
{
  if ($_FILES['obrazek']['error'] > 0)
  {
    echo 'problem: ';
    switch ($_FILES['obrazek']['error'])
    {
      case 1: {echo 'Rozmiar pliku jest zbyt duży.'; break;} 
      case 2: {echo 'Rozmiar pliku jest zbyt duży.'; break;}
      case 3: {echo 'Plik wysłany tylko częściowo.'; break;}
      case 4: {echo 'Nie wysłano żadnego pliku.'; break;}
      default: {echo 'Wystąpił błąd podczas wysyłania.';
      break;}
    }
    return false;
  }
  return true;
}

function sprawdz_typ()
{
	if ($_FILES['obrazek']['type'] != 'image/jpeg')
	{
		return false;
	}
	return true;
}

function zapisz_plik()
{
  $lokalizacja = './temp/plik_obrazkowy.jpg';

  if(is_uploaded_file($_FILES['obrazek']['tmp_name']))
  {
    if(!move_uploaded_file($_FILES['obrazek']['tmp_name'], $lokalizacja))
    {
      echo 'problem: Nie udało się skopiować pliku do katalogu.';
        return false;  
    }
  }
  else
  {
    echo 'problem: Możliwy atak podczas przesyłania pliku.';
	echo 'Plik nie został zapisany.';
    return false;
  }
  return true;
}

?>
