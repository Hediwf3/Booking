<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 06/02/2018
 * Time: 17:19
 */

echo ('
<body>
   <div class="cover">
      <form class="flex-form">
         <span>I want to book</span>
         <select>
            <option value="1">Gilbert</option>
            <option value="2">Claude</option>
            <option value="3">Patrick</option>
            <option value="4">JUL</option>
           
         </select>
         
         <label for="from">from</label>
         <input type="date" name="from">
         
         <label for="to">to</label>
         <input type="date" name="to">
         
         <span>to work there with </span>
         <select>
            <option value="1">1 person</option>
            <option value="2">2 people</option>
            <option value="3">3 people</option>
            <option value="4">4 people</option>
            <option value="5">5 people</option>
         </select>
         
         <input type="submit" value="book" class="cta">
      </form>
   </div>
   
   <video class="busy" src="http://theonewhodo.es/images/busy.mp4" autoplay loop></video>
</body>

');