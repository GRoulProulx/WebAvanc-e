{{ include('layouts/header.php', {title:'Renter Create'})}}
<div class="container">
        <form method="post">
            <h2>New Renter</h2>
            <label>Name
                <input type="text" name="name" value="{{ inputs.name }}">
            </label>
             {% if errors.name is defined %}                   
             <span class="error">{{ errors.name }}</span>
            {% endif %}
             <label>Address
                <input type="text" name="address" value="{{ inputs.address }}">
            </label>
            {% if errors.address is defined %}                   
             <span class="error">{{ errors.address }}</span>
            {% endif %}
            <label>City
                <input type="text" name="city" value="{{ inputs.city }}">
            </label>
            {% if errors.city is defined %}                   
             <span class="error">{{ errors.city }}</span>
            {% endif %}
            <label>Zip Code
                <input type="text" name="zipcode" value="{{ inputs.zipcode }}">
            </label>
            {% if errors.zip_code is defined %}                   
             <span class="error">{{ errors.zipcode }}</span>
            {% endif %}

            <label>Location
                <select name="locationtypeid">
                    <option value="">Select</option>
                    {% for locationplace in locations %}
                        <option value="{{locationplace.id}}" {% if(locationplaceid == inputs.locationplaceid) %} selected {%endif%}>{{ locationplace.typename}}</option>
                    {% endfor %}
                </select>
            </label>
            {% if errors.locationtypeid is defined %}                   
             <span class="error">{{ errors.locationtypeid }}</span>
            {% endif %}
            <input type="submit" class="btn" value="Save">
        </form>
    </div>
{{ include('layouts/footer.php')}}