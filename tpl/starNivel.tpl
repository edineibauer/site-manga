<i class='material-icons font-large left' {if $nivel < 4}style='color:goldenrod'{/if}>star</i>
<i class='material-icons font-large left' {if $nivel < 3}style='color:goldenrod'{/if}>star</i>
<i class='material-icons left font-large' {if $nivel < 2}style='color:goldenrod'{/if} style="padding-right: 4px">star</i>
<span class='left hide nivelName'>
    {($nivel > 3)? "Noob" : (($nivel > 2)? "Calouro" : (($nivel > 1)? "Veterano" : "Mestre"))}
</span>