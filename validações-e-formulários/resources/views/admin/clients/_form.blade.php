    {{ csrf_field() }}
       <div class="d-grid gap-4">

           <div>
               <label for="name" class="form-label">*Nome:</label>
               <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome completo" value="{{ old('name', $client->name) }}">
           </div>
       
           <div>
               <label for="document_number" class="form-label">*Documento:</label>
               <input type="text" class="form-control" id="document_number" name="document_number" placeholder="Digite seu documento" value="{{ old('document_number', $client->document_number) }}">
           </div>  
           <div>
               <label for="email" class="form-label">*E-mail:</label>
               <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" value="{{ old('email', $client->email) }}">
           </div>  
           <div>
               <label for="phone" class="form-label">*Telefone:</label>
               <input type="tel" class="form-control" id="phone" name="phone" placeholder="Digite seu telefone" value="{{ old('phone', $client->phone) }}">
           </div> 
           
           @php
               $marital_status = $client->marital_status;
           @endphp
           
           <div>
               <label for="marital_status" class="form-label">*Estado civil:</label>
               <select id="marital_status" class="form-select" name="marital_status" value="{{ old('marital_status', $marital_status) }}">
                   <option selected>Selecione o estado civil</option>
                   <option value="1" {{ old('marital_status', $marital_status) == '1' ? 'selected="selected"': '' }}>Solteiro(a)</option>
                   <option value="2" {{ old('marital_status', $marital_status) == '2' ? 'selected="selected"': '' }}>Casado(a)</option>
                   <option value="3" {{ old('marital_status', $marital_status) == '3' ? 'selected="selected"': '' }}>Viuvo(a)</option>
               </select>
           </div> 

           <div>
               <label for="date_birth" class="date_birth">*Data de nascimento:</label>
               <input type="date" class="form-control" id="date_birth" name="date_birth" value="{{ old('date_birth', $client->date_birth )  }}">
           </div> 

           @php
               $sex = $client->sex;
           @endphp

           <div>
               <input type="radio" id="f" name="sex" value="f" {{ old('client', $client) == 'f' ? 'checked="checked"' : '' }}>
               <label for="f">Feminino</label><br>

               <input type="radio" id="m" name="sex" value="m" {{ old('client', $client) == 'm' ? 'checked="checked"': '' }}>
               <label for="m">Masculino</label><br>
           </div>
       
           <div>
               <label for="physical_disability" class="form-label">Deficiência fisica:</label>
               <input type="text" class="form-control" id="physical_disability" name="physical_disability" value="{{ old('physical_disability', $client->physical_disability) }}">
           </div> 

           <div>
               <input type="checkbox" id="defaulter" name="defaulter" value="{{ old('defaulter', $client->defaulter) ? 'checked="checked"' : '' }}">
               <label for="defaulter">Inadimplente?</label><br>
           </div> 
           
           <div>
               <button type="submit" class="btn btn-secondary">Enviar</button>
           </div>
       </div>
   </form>