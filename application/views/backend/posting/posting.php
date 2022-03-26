<!-- posting -->
<div class="posting">

<!--  -->
<div class="search-engine">
    <form action="">
        <input type="text" name="" id="" placeholder="SEARCH">
        <button class="knob"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
</div>

<div class="locker">
    <table class="">
        <thead class="">
            <tr>
                <th class="numb">#</th>
                <th class="id">id</th>
                <th class="picture">poster</th>
                <th class="title">title</th>
                <th class="subtitle">subtitle</th>
                <th class="condition">status</th>
                <th class="date">date</th>
                <th class="address">address</th>
                <th class="action">action</th>
            </tr>
        </thead>
        <tbody class="">
            <tr>
                <td class="numb">1</td>
                <td class="id">24</td>
                <td class="picture">
                    <div class="poster">
                        <img src="imgs/" alt="">
                    </div>
                </td>
                <td class="title">this is a title posting</td>
                <td class="subtitle">this is a subtitle posting</td>
                <td class="condition"><span class="on">on</span></td>
                <td class="date">jul 12, 2021</td>
                <td class="address">this-is-a-adrrss-page</td>
                <td class="action">
                    <a href="<?php echo base_url('backend/posting/posting_change'); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href=""><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            
            

        </tbody>
    </table>
</div>
<!--  -->

<div class="nposting">
    <span class=""><a href="<?php echo base_url('backend/posting/posting_plus'); ?>"><i class="fa-solid fa-plus"></i></a></span>
</div>

</div>
<!-- end posting -->