window.onload = () =>{
    const WeatherForecast = async(location = 'kathmandu')=>{
        let currentTemp = document.getElementById('currentTemp');
        let day0 = document.getElementById('day0');
        let day1 = document.getElementById('day1');
        let day2 = document.getElementById('day2');
        let currentImg = document.getElementById('currentImg');
        let Img0 = document.getElementById('Img0');
        let Img1 = document.getElementById('Img1');
        let Img2 = document.getElementById('Img2');
        
        let url=`http://api.weatherapi.com/v1/forecast.json?key=e7900d1b599546448d1113814231308&q=${location} nepal&days=7`;
        let data = await fetch(url);
        let realdata = await data.json();
        
        currentTemp.innerHTML=realdata.current.temp_c + "°C";
        day0.innerHTML=realdata.forecast.forecastday[0].day.avgtemp_c + "°C";
        day1.innerHTML=realdata.forecast.forecastday[1].day.avgtemp_c+ "°C";
        day2.innerHTML=realdata.forecast.forecastday[2].day.avgtemp_c + "°C";
        
        currentImg.src=realdata.current.condition.icon;
        Img0.src=realdata.forecast.forecastday[0].day.condition.icon;
        Img1.src=realdata.forecast.forecastday[1].day.condition.icon;
        Img2.src=realdata.forecast.forecastday[2].day.condition.icon;
    }
    let location = document.getElementById('location').value;
    WeatherForecast(location);
}