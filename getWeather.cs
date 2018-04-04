using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class getWeather : MonoBehaviour
{
    public string url = "http://localhost/cle3unity/weatherApiJson.php";
    public weatherJson weather;
    public string hoeIsHetWeer;
    public string hoeWordtHetWeer;

    IEnumerator Start()
    {
        using (WWW www = new WWW(url))
        {
            yield return www;
            Debug.Log(www.text);
            weather = JsonUtility.FromJson<weatherJson>(www.text);

            Debug.Log(weather.weather);
        }
    }

    void start()
    {       
        if (weather.weather < 700 && weather.weather >= 900 && weather.weather != 600 && weather.weather != 601)
        {
            hoeIsHetWeer = "Ik zou nu geen spelletje spelen, het weer is slecht";
        }
        else
        {
            hoeIsHetWeer = "Het is lekker Weer! Ga naar buiten en speel een spelletje";
        }

        if (weather.weatherOver3 < 700 && weather.weatherOver3 >= 900 && weather.weatherOver3 != 600 && weather.weatherOver3 != 601)
        {
            hoeWordtHetWeer = "Het weer over 3 uur is slecht";
        }
        else
        {
            hoeWordtHetWeer = "Over 3 uur is het een lekker weertje voor een spelletje";
        }
    }
}