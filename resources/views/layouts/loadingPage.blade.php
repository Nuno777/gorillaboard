<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loading</title>
</head>
<style>
    .screen {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: tomato;
  display: flex;
  align-items: center;
}

.loader {
  width: 100%;
  height: 15px;
  text-align: center;
}

.dot {
  position: relative;
  width: 15px;
  height: 15px;
  margin: 0 2px;
  display: inline-block;
}

.dot:first-child:before {
  animation-delay: 0ms;
}

.dot:first-child:after {
  animation-delay: 0ms;
}

.dot:last-child:before {
  animation-delay: 200ms;
}

.dot:last-child:after {
  animation-delay: 200ms;
}

.dot:before{
  content: "";
  position: absolute;
  left: 0;
  width: 15px;
  height: 15px;
  background-color: blue;
  animation-name: dotHover;
  animation-duration: 900ms;
  animation-timing-function: cubic-bezier(.82,0,.26,1);
  animation-iteration-count: infinite;
  animation-delay: 100ms;
  background: white;
  border-radius: 100%;  
}

.dot:after {
  content: "";
  position: absolute;
  z-index: -1;
  background: black;
  box-shadow: 0px 0px 1px black;
  opacity: .20;
  width: 100%;
  height: 3px;
  left: 0;
  bottom: -2px;
  border-radius: 100%;
  animation-name: dotShadow;
  animation-duration: 900ms;
  animation-timing-function: cubic-bezier(.82,0,.26,1);
  animation-iteration-count: infinite;
  animation-delay: 100ms;
}

@keyframes dotShadow {
  0% {
    transform: scaleX(1);
  }
  50% {
    opacity: 0;
    transform: scaleX(.6);
  }
  100% {
    transform: scaleX(1);
  }
}

@keyframes dotHover {
  0% {
    top: 0px;
  }
  50% {
    top: -50px;
    transform: scale(1.1);
  }
  100% {
    top: 0;
  }
}
</style>
<body>
    <div class="screen">

        <div class="loader">
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
        </div>
      
      </div>
</body>
</html>